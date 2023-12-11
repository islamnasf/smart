<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Sitesetteings;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index()
    {
        $data = Sitesetteings::find(1);
        return view('landingpage/subject/stages', compact("data"));
    }

    public function stageInfon()
    {
        $data = Sitesetteings::find(1);
        return view('landingpage.subject.stageinfo', compact("data"));
    }
}
