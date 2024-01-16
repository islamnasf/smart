<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\AnotherPackage;
use App\Models\Book;
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
        if ($name == 'four') {
            $books = Book::where('classroom', 'الصف الرابع')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف الرابع')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف الرابع')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف الرابع')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف الرابع')->first();
        } elseif ($name == 'five') {
            $books = Book::where('classroom', 'الصف الخامس')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف الخامس')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف الخامس')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف الخامس')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف الخامس')->first();
        } elseif ($name == 'six') {
            $books = Book::where('classroom', 'الصف السادس')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف السادس')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف السادس')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف السادس')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف السادس')->first();
        } elseif ($name == 'seven') {
            $books = Book::where('classroom', 'الصف السابع')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف السابع')->get();
            $course_Packages = Package::has('course')->where('class',  'الصف السابع')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف السابع')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف السابع')->first();
        } elseif ($name == 'eight') {
            $books = Book::where('classroom', 'الصف الثامن')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف الثامن')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف الثامن')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف الثامن')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف الثامن')->first();
        } elseif ($name == 'nine') {
            $books = Book::where('classroom', 'الصف التاسع')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف التاسع')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف التاسع')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف التاسع')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف التاسع')->first();
        } elseif ($name == 'ten') {
            $books = Book::where('classroom', 'الصف العاشر')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف العاشر')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف العاشر')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف العاشر')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف العاشر')->first();
        } elseif ($name == 'eleven') {
            $books = Book::where('classroom', 'الصف الحادي عشر')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف الحادي عشر')->get();
            $course_Packages = Package::has('course')->where('class',  'الصف الحادي عشر')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class',  'الصف الحادي عشر')->first();
            $coursePackage = Package::has('course')->where('class','الصف الحادي عشر')->first();
        } elseif ($name == 'twelve') {
            $books = Book::where('classroom', 'الصف الثاني عشر')->get();
            $book_Packages = AnotherPackage::has('book')->where('class', 'الصف الثاني عشر')->get();
            $course_Packages = Package::has('course')->where('class', 'الصف الثاني عشر')->get();
            //
            $bookPackage = AnotherPackage::has('book')->where('class', 'الصف الثاني عشر')->first();
            $coursePackage = Package::has('course')->where('class', 'الصف الثاني عشر')->first();
        }
        return view('landingpage.books.notes_class', compact('books', 'book_Packages', 'course_Packages','bookPackage' ,'coursePackage'));
    }
    public function downloadPdf($fileName)
    {

        return response()->download(storage_path('app/public/pdf/books/' . $fileName));
    }
}
