<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tutorial;
use App\Models\Video;
use Illuminate\Http\Request;

class TutorialController extends Controller
{

    public function index($courseId)
    {
        $course = Course::find($courseId);
        $tutorials = Tutorial::where('course_id', $courseId)->get();
        return view("teacher.course.tutorial", compact("course", "tutorials"));
    }
    public function showVideo($videoId)
    {
        $video = Video::find($videoId)->comments;
        return view("teacher.course.videolive", compact("video"));
    }
}
