<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Exam;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teacherCount = user::where('user_type', 'teacher')->count();
        $studentCount = user::where('user_type', 'user')->count();
        $courses = Course::all()->count();
        $examCount = Exam::count();

        $subject = Auth::user()->group;
        $userSubject = Course::where('classroom', $subject)->get();
        
        return view('/admin/dashboard', compact('teacherCount', 'studentCount', 'examCount', 'courses', 'userSubject'));
    }
}
