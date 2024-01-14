<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        return view('landingpage/books/stages');
    }
//second page
    public function classes()
    {
        return view('landingpage.books.stageinfo');
    }
//third page  
}
