<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
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
}
