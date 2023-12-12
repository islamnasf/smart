<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Sitesetteings;
use Illuminate\Http\Request;

class StageController extends Controller
{
//first page
    public function index()
    {
        $data = Sitesetteings::find(1);
        return view('landingpage/subject/stages', compact("data"));
    }
//second page
    public function stageInfon()
    {
        $data = Sitesetteings::find(1);
        return view('landingpage.subject.stageinfo', compact("data"));
    }
//third page  
    public function showAllSubjects()
    {
        $data = Sitesetteings::find(1);
        return view('landingpage.subject.subjects', compact("data"));
    }
}
