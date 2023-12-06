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
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route('course');
    }
    public function delete($courseId)
    {
        $courses = Course::find($courseId);
        $courses->delete();
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route("showTermone");
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
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route('showTutorial', $userId);
    }
    public function deleteTutorial(Request $request, $id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        toastr()->success('تم حذف البيانات بنجاح');
        return back();
    }

    public function editTutorial(Request $request, $id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->update($request->all());
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
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
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route('showTutorialVideo', $tutorialId);
    }

    public function deleteVideo(Request $request, $id)
    {
        $video = Video::find($id);
        $video->delete();
        toastr()->success('تم حذف البيانات بنجاح');
        return back();
    }
    public function editVideo(Request $request, $id)
    {
        $video = Video::find($id);
        $video->update($request->all());
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

}
