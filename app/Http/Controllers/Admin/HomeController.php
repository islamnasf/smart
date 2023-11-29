<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $teacherCount=user::where('user_type','1')->where('IsAdmin','0')->count();
        $studentCount=user::where('user_type','0')->where('IsAdmin','0')->count();
        return view('/admin/dashboard', compact('teacherCount','studentCount'));
        }
}
