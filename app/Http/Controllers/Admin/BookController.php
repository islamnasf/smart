<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnotherPackage;
use App\Models\Book;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        return view('/admin/book/home');
    }

    public function addBook()
    {
        $techer = User::where("user_type", "teacher")->get();
        return view('/admin/book/addBook',compact('techer'));
    }
  public function store(Request $request)
    {
        $data = new book();
        if ($request->file('pdf')) {
            $file = $request->pdf;
            $filename = $file->getClientOriginalName();
            $request->pdf->storeAs('public/pdf/books', $filename);
            $data->pdf = $filename;
        }
        $data->name = $request->name;
        $data->techer_id = $request->techer_id;
        $data->stage = $request->stage;
        $data->classroom = $request->classroom;
        $data->expiry_date = $request->expiry_date;
        $data->quantity = $request->quantity;
        $data->teacher_ratio = floatval($request->teacher_ratio);
        $data->book_price = $request->book_price;
        $data->term_type = $request->term_type;
        $data->save();
        toastr()->success('تم حفظ البيانات بنجاح');
        return view("admin.book.home");
    }
    public function storeBook(){
        $books=Book::select('*')->get();
        return view('/admin/book/store',compact('books') );
    }
    
    public function showBooksClass(string $name){
        if($name == 'four'){
            $books = book::where('classroom', 'الصف الرابع')->get();
        }
        elseif($name == 'five'){
            $books = book::where('classroom', 'الصف الخامس')->get();
        }
        elseif($name == 'seven'){
            $books = book::where('classroom', 'الصف السابع')->get();
        }
        if($name == 'six'){
            $books = book::where('classroom', 'الصف السادس')->get();
        }
        elseif($name == 'seven'){
            $books = book::where('classroom', 'الصف السابع')->get();
        }
        elseif($name == 'eight'){
            $books = book::where('classroom', 'الصف الثامن')->get();
        }
        elseif($name == 'nine'){
            $books = book::where('classroom', 'الصف التاسع')->get();
        }
        elseif($name == 'ten'){
            $books = book::where('classroom', 'الصف العاشر')->get();
        }
        elseif($name == 'eleven'){
            $books = book::where('classroom', 'الصف الحادي عشر')->get();
        }
        elseif($name == 'twelve'){
            $books = book::where('classroom', 'الصف الثاني عشر')->get();
        }
        return view('/admin/book/store', compact('books'));
    }
    
    public function addQuantity(request $request, int $book){
        $book=Book::findOrFail($book);
        $oldQuantity=$book->quantity;

        $book->update([
            'quantity'=>$oldQuantity + $request->quantity
        ]);
        $books=Book::select('*')->get();
        return view('/admin/book/store',compact('books') );

    }
    public function termone()
    {
        $books = Book::where('term_type', 'termone')->get();
        return view("admin.book.termone", compact("books"));
    }
    public function termtow()
    {
        $books = Book::where('term_type', 'termtow')->get();
        return view("admin.book.termtow", compact("books"));
    }
    public function edit(int $book){
        $book=Book::findOrfail($book);
        $techer = User::where("user_type", "teacher")->get();
        return view('/admin/book/editBook',compact(['techer','book']));
    }
    public function update(Request $request, $id)
    {
        $data = Book::findOrFail($id);
    
        if ($request->file('pdf')) {
            Storage::delete('public/pdf/books/' . $data->pdf);
            $file = $request->pdf;
            $filename = $file->getClientOriginalName();
            $request->pdf->storeAs('public/pdf/books', $filename);
            $data->pdf = $filename;
        }
        $data->name = $request->name;
        $data->techer_id = $request->techer_id;
        $data->expiry_date = $request->expiry_date;
        $data->quantity = $request->quantity;
        $data->teacher_ratio = floatval($request->teacher_ratio);
        $data->book_price = $request->book_price;
        $data->save();
        toastr()->success('تم تحديث البيانات بنجاح');
        return $this->getTermPageRoute($data->term_type);
    }

    public function getTermPageRoute($termType)
    {
        $routeName = '';
        if ($termType == 'termone') {
            $routeName = 'termone';
        } elseif ($termType == 'termtow') {
            $routeName = 'termtow';
        } else {
            $routeName = 'default';   
        }
        return redirect()->route($routeName);
    }
    //package
    public function allPackage(){
        $package = AnotherPackage::with('book')->where('is_active', 1)->get();
        return view("admin.book.package", compact("package"));
    }
    public function create(Request $request)
    {
        $package = AnotherPackage::create($request->all());
        if ($package) {
            $courses = book::where('classroom', $package->class)->get();
        }
        return back();
    }
    
}
