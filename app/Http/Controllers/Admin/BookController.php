<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

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
}
