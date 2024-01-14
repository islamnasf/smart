<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingSubjectsController extends Controller
{
    public function index()
    {
        return view('landingpage/subject/stages');
    }
    //second page
    public function highSchool()
    {
        return view('landingpage.subject.high_school');
    }
    //third page  
    public function middleSchool()
    {
        return view('landingpage.sujbect.middle_school');
    }
}
