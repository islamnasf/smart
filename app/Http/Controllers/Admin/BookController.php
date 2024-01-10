<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnotherPackage;
use App\Models\Book;
use App\Models\MandubBook;
use App\Models\Package;
use App\Models\TargetBook;
use App\Models\TermOne;
use App\Models\TermTow;
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
        return view('/admin/book/addBook', compact('techer'));
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
        // $data->expiry_date = $request->expiry_date;
        $data->quantity = $request->quantity;
        $data->teacher_ratio = floatval($request->teacher_ratio);
        $data->book_price = $request->book_price;
        $data->term_type = $request->term_type;
        $data->save();


        toastr()->success('تم حفظ البيانات بنجاح');
        return view("admin.book.home");
    }
    public function storeBook()
    {
        $books = book::with('target')->select('*')->get();
        return view('/admin/book/store', compact('books'));
    }

    public function showBooksClass(string $name)
    {
        if ($name == 'four') {
            $books = book::with('target')->where('classroom', 'الصف الرابع')->get();
        } elseif ($name == 'five') {
            $books = book::with('target')->where('classroom', 'الصف الخامس')->get();
        } elseif ($name == 'seven') {
            $books = book::with('target')->where('classroom', 'الصف السابع')->get();
        }
        if ($name == 'six') {
            $books = book::with('target')->where('classroom', 'الصف السادس')->get();
        } elseif ($name == 'seven') {
            $books = book::with('target')->where('classroom', 'الصف السابع')->get();
        } elseif ($name == 'eight') {
            $books = book::with('target')->where('classroom', 'الصف الثامن')->get();
        } elseif ($name == 'nine') {
            $books = book::with('target')->where('classroom', 'الصف التاسع')->get();
        } elseif ($name == 'ten') {
            $books = book::with('target')->where('classroom', 'الصف العاشر')->get();
        } elseif ($name == 'eleven') {
            $books = book::with('target')->where('classroom', 'الصف الحادي عشر')->get();
        } elseif ($name == 'twelve') {
            $books = book::with('target')->where('classroom', 'الصف الثاني عشر')->get();
        }
        return view('/admin/book/store', compact('books'));
    }

    public function addQuantity(request $request, int $book)
    {
        $book = Book::findOrFail($book);
        $oldQuantity = $book->quantity;
        $book->update([
            'quantity' => $oldQuantity + $request->quantity
        ]);
        // $books=Book::select('*')->get();
        // return view('/admin/book/store',compact('books') );
        return back();
    }
    public function termone()
    {
        $term = TermOne::first();
        $books = Book::where('term_type', 'termone')->get();
        return view("admin.book.termone", compact("books", "term"));
    }
    public function termtow()
    {
        $term = TermTow::first();
        $books = Book::where('term_type', 'termtow')->get();
        return view("admin.book.termtow", compact("books", "term"));
    }
    public function edit(int $book)
    {
        $book = Book::findOrfail($book);
        $techer = User::where("user_type", "teacher")->get();
        return view('/admin/book/editBook', compact(['techer', 'book']));
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
        // $data->expiry_date = $request->expiry_date;
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
    public function allPackage()
    {
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
    //target
    public function createTarget(Request $request)
    {
        $selectedBooks = $request->input('selected_subjects');
        if (!$selectedBooks) {
            toastr()->error('لا يوجد مذكرات');
            return back();
        }
        $target = $request->input('target');
        foreach ($selectedBooks as $bookId) {
            $book = Book::find($bookId);
            if ($book) {
                $printValue = $target - $book->quantity;

                TargetBook::updateOrCreate(
                    ['book_id' => $bookId],
                    [
                        'target' => $target,
                        'print' => $printValue,
                    ]
                );
            }
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    public function updateQuantityClass(Request $request)
    {
        $selectedBooks = $request->input('selected_subjects');
        if (!$selectedBooks) {
            toastr()->error('لا يوجد مذكرات');
            return back();
        }
        $quantity = $request->input('quantity');
        foreach ($selectedBooks as $bookId) {
            $book = Book::find($bookId);
            if ($book) {
                $newquantity = $quantity + $book->quantity;

                $book->update(
                    [
                        'quantity' => $newquantity,
                    ]
                );
            }
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    public function finishPrint(Request $request)
    {
        $selectedBooks = $request->input('selected_subjects');
        if (!$selectedBooks) {
            toastr()->error('لا يوجد مذكرات');
            return back();
        }
        foreach ($selectedBooks as $bookId) {
            $book = Book::find($bookId);
            if ($book) {
                $newquantity = $book->target->print + $book->quantity;
                TargetBook::where('book_id', $bookId)->first()->update(['print' => 0]);

                $book->update(
                    [
                        'quantity' => $newquantity,
                    ]
                );
            }
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

    public function printBookFinish( $book)
    {
        $book = Book::where('id',$book)->first();

        if ($book) {
            $newquantity = $book->target->print + $book->quantity;
            TargetBook::where('book_id', $book->id)->first()->update(['print' => 0]);

            $book->update([
                'quantity' => $newquantity,
            ]);
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
}
