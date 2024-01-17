<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\AnotherPackage;
use App\Models\Book;
use App\Models\BookCart;
use App\Models\Package;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('landingpage/books/stages_notes');
    }
    //second page
    public function highSchool()
    {
        return view('landingpage.books.high_school_notes');
    }
    //third page  
    public function middleSchool()
    {
        return view('landingpage.books.middle_school_notes');
    }
    public function classNotes(string $name)
    {
        $classroomMap = [
            'four' => 'الصف الرابع',
            'five' => 'الصف الخامس',
            'six' => 'الصف السادس',
            'seven' => 'الصف السابع',
            'eight' => 'الصف الثامن',
            'nine' => 'الصف التاسع',
            'ten' => 'الصف العاشر',
            'eleven' => 'الصف الحادي عشر',
            'twelve' => 'الصف الثاني عشر',
        ];

        if (isset($classroomMap[$name])) {
            $classroom = $classroomMap[$name];

            $books = Book::where('classroom', $classroom)->get();
            $book_Packages = AnotherPackage::has('book')->where('class', $classroom)->get();
            $course_Packages = Package::has('course')->where('class', $classroom)->get();

            $bookPackage = AnotherPackage::has('book')->where('class', $classroom)->first();
            $coursePackage = Package::has('course')->where('class', $classroom)->first();


            return view('landingpage.books.notes_class', compact('books', 'book_Packages', 'course_Packages', 'bookPackage', 'coursePackage'));
        }
    }

    public function downloadPdf($fileName)
    {

        return response()->download(storage_path('app/public/pdf/books/' . $fileName));
    }
    //cart // 
    public function cartBooks()
    {

        $sessionId = session()->getId();
        $items = BookCart::where('session_id', $sessionId)->get();
        return view('landingpage.books.cart', compact('items'));
    }

    //cart // book //add 
    public function addToCartbooks(Request $request)
    {
        BookCart::create([
            'session_id' => session()->getId(),
            'book_id' => $request->book_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        toastr()->success('تم اضافة الكتاب  بنجاح');
        return back();
    }
    public function addToCartPackages(Request $request)
    {
        BookCart::create([
            'session_id' => session()->getId(),
            'package_id' => $request->package_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        toastr()->success('تم اضافة الباقة  بنجاح');
        return back();
    }

    public function deleteCartBooksItem(int $cart)
    {
        $cartItem = BookCart::find($cart);
        $cartItem->delete();
        toastr()->success(' تم الحذف بنجاح');
        return redirect()->back();
    }
}
