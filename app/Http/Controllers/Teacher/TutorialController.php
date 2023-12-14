<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tutorial;
use App\Models\Video;
use App\Models\VideoComment;
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
        $comment = Video::find($videoId)->comments;
        $video = Video::find($videoId);

        $tutorials = $video->tutorial;
        return view("teacher.course.videolive", compact("comment", 'video', 'tutorials'));
    }
    public function createVideoComment(Request $request, $videoId)
    {
        VideoComment::create([
            'comment' => $request->comment,
            'video_id' => $videoId
        ]);
        return redirect()->back()->with('success', 'Sent Comment');
    }
}
