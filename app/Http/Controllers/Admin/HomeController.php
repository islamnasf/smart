<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $teacherCount=user::where('user_type','teacher')->count();
        $studentCount=user::where('user_type','user')->count();
        $examCount=Exam::count();
        return view('/admin/dashboard', compact('teacherCount','studentCount','examCount'));
        }
}
