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
    public function tutorial(Request $request, $courseId)
    {
        $course = Course::find($courseId);
        $tutorials = Tutorial::where('course_id', $courseId)->get();
        return view('admin.course.tutorial', (compact('tutorials')))->with('course', $course);
    }

    public function createTutorial(Request $request, $courseId)
    {
        $requests = $request->validate([
            'name' => 'required',
        ]);

        $tutorial = Tutorial::create([
            'name' => $request->name,
            'course_id' => $courseId,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
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
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $data=new video();
        if ($request->file('pdf') ) {
        $file = $request->pdf;
        $filename=$file->getClientOriginalName();
        $request->pdf->storeAs('public/pdfs',$filename);
        $data->pdf=$filename;
            }
            $data->name = $request->name;
            $data->link = $request->link;
            $data->type = $request->type;
            $data->tutorial_id = $tutorialId;
        $data->save();
          toastr()->success('تم حفظ البيانات بنجاح');
             return back(); 
        }
        // if($request->file('pdf')){
        //     $file = $request->file('pdf');
        //     $filePath = $file->storeAs('pdfs', $file->getClientOriginalName(), 'public');
    
        //     $video = Video::create([
        //         'name' => $request->name,
        //         'link' => $request->link,
        //         'pdf' => $filePath,
        //         'type' => $request->type,
        //         'tutorial_id' => $tutorialId,
        //     ]);
        // }else{
        //     $video = Video::create([
        //         'name' => $request->name,
        //         'link' => $request->link,
        //         'type' => $request->type,
        //         'tutorial_id' => $tutorialId,
        //     ]);
        // }
        // toastr()->success('تم حفظ البيانات بنجاح');
        // return redirect()->route('showTutorialVideo', $tutorialId);
    

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

    public function reports()
    {
        return view('admin.course.reports');
    }

}
