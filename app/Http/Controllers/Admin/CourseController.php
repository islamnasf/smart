<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
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
}
