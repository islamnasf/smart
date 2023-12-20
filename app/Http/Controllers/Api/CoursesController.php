<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tutorial;
use App\Models\Video;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
            $coursesix=Course::where('classroom','الصف السادس')->get();
        
            $courseseven=Course::where('classroom','الصف السابع')->get();
        
            $courseeight=Course::where('classroom','الصف الثامن')->get();
        
            $coursenine=Course::where('classroom','الصف التاسع')->get();
        
            $courseten=Course::where('classroom','الصف العاشر')->get();
        
            $courseeleven=Course::where('classroom','الصف الحادي عشر')->get();
        
            $coursetwelve=Course::where('classroom','الصف الثاني عشر')->get();
        

            return response()->json([
                'status'=>200,
                'coursesix'=> $coursesix,
                'courseseven'=> $courseseven,
                'courseeight'=> $courseeight,
                'coursenine'=> $coursenine,
                'courseten'=> $courseten,
                'courseeleven'=> $courseeleven,
                'coursetwelve'=> $coursetwelve,
            ],200);

        
    }
    public function tutorial(int $course){
        $tutorial=Tutorial::where('course_id',$course)->with('video')->get();
        return response()->json([
            'status'=>200,
            'tutorial'=> $tutorial,
        ],200);
     }
}
//
