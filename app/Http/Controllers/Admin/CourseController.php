<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tutorial;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view("admin.course.home");
    }
    public function create()
    {
        $techer = User::where("user_type", "teacher")->get();
        return view("admin.course.add", compact("techer"));
    }
    public function store(Request $request)
    {
        $requests = $request->all();
        Course::create($requests);
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route("addCourse");
    }

    public function termone()
    {
        $courses = Course::where('term_type', 'termone')->get();
        $count = $courses->count();
        return view("admin.course.termone", compact("count", "courses"));
    }
    public function termtow()
    {
        $courses = Course::where('term_type', 'termtow')->get();
        $count = $courses->count();
        return view("admin.course.termtow", compact("count", "courses"));
    }

    public function showEdit(Request $request, $id)
    {
        $techer = User::where("user_type", "teacher")->get();
        $coures = Course::find($id);
        return view("admin.course.edit", compact("coures", 'techer'));
    }
    public function update(Request $request, $id)
    {
        $coures = Course::find($id);
        $coures->update($request->all());
        return redirect()->route('course')->with('success', 'update Done!');
    }
    public function delete($courseId)
    {
        $courses = Course::find($courseId);
        $courses->delete();
        return redirect()->route("showTermone")->with("success", "Done!");
    }
    public function tutorial(Request $request, $userId)
    {
        $teacher = User::find($userId)->tutorial;
        return view('admin.course.tutorial', (compact('teacher')));
    }

    public function createTutorial(Request $request, $userId)
    {
        $requests = $request->validate([
            'name' => 'required',
        ]);

        $tutorial = Tutorial::create([
            'name' => $request->name,
            'user_id' => $userId,
        ]);

        return redirect()->route('showTutorial', $userId)->with('success', 'create done!');
    }
    public function deleteTutorial(Request $request, $id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        return back()->with('success', 'delete done!');
    }

    public function editTutorial(Request $request, $id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->update($request->all());
        return back()->with('success', 'edit done!');
    }

    public function video(Request $request, $tutorialId)
    {
        $tutorial = Tutorial::find($tutorialId)->video;
        return view('admin.course.video', (compact('tutorial')));
    }

    public function createVideo(Request $request, $tutorialId)
    {
        $requests = $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $video = Video::create([
            'name' => $request->name,
            'link' => $request->link,
            'type' => $request->type,
            'tutorial_id' => $tutorialId,
        ]);

        return redirect()->route('showTutorialVideo', $tutorialId)->with('success', 'create done!');
    }

    public function deleteVideo(Request $request, $id)
    {
        $video = Video::find($id);
        $video->delete();
        return back()->with('success', 'delete done!');
    }
    public function editVideo(Request $request, $id)
    {
        $video = Video::find($id);
        $video->update($request->all());
        return back()->with('success', 'edit done!');
    }

}
