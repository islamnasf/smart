<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $booksix=Book::where('classroom','الصف السادس')->get();
        $bookseven=book::where('classroom','الصف السابع')->get();
        $bookeight=book::where('classroom','الصف الثامن')->get();
        $booknine=book::where('classroom','الصف التاسع')->get();
        $bookten=book::where('classroom','الصف العاشر')->get();
        $bookeleven=book::where('classroom','الصف الحادي عشر')->get();
        $booktwelve=book::where('classroom','الصف الثاني عشر')->get();
        return response()->json([
            'status'=>200,
            'booksix'=> $booksix,
            'bookseven'=> $bookseven,
            'bookeight'=> $bookeight,
            'booknine'=> $booknine,
            'bookten'=> $bookten,
            'bookeleven'=> $bookeleven,
            'booktwelve'=> $booktwelve,
        ],200);
}
public function download($fileName)
{
   return response()->download(storage_path('app/public/pdfs/'.$fileName));
}
}
