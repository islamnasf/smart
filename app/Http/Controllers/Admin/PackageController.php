<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Package;
use App\Models\PackageCourses;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $package = Package::has('course')->where('is_active', 1)->get();
        return view("admin.course.package.package", compact("package"));
    }
    public function create(Request $request)
    {
        $package = Package::create($request->all());
        if ($package) {
            $courses = Course::where('classroom', $package->class)->get();
        }
       
       

        return view("admin.course.package.addpackage", compact('courses', 'package'));
    }

    public function createPackageDetails(Request $request, int $package)
    { 
    $request->validate([
        'selected_subjects' => 'required|array|min:1',
    ], [
        'selected_subjects.required' => 'يجب اختيار كورس واحد على الأقل.',
        'selected_subjects.min' => 'يجب اختيار كورس واحد على الأقل.',
    ]);
    
        $pack = Package::find($package);
        if (!$pack) {
            return redirect()->back()->with('error', 'لم يتم العثور على الباقة');
        }
        
        $selectedCourses = $request->input('selected_subjects', []);
        $data = [
            'created_at' => Carbon::now(),
        ];
        $pack->course()->sync($selectedCourses, $data);
        $package = Package::has('course')->where('is_active', 1)->get();
        toastr()->success('تم حفظ البيانات بنجاح');
        return view("admin.course.package.package", compact("package"));
    }

    public function delete($packageId)
    {
        $package = Package::find($packageId);
        $package->delete();
        return redirect()->back()->with("success", "Done !");
    }
    public function edit(Request $request, $packageId)
    {
        $package = Package::find($packageId);
        if ($package) {

            $courses = Course::where('classroom', $package->class)->get();
        }
        $packagecourse=PackageCourses::where("package_id",$package->id)->get();
        $packagecourses = [];
        foreach ($packagecourse as $packagecourse) {
            $cour = course::find($packagecourse->course_id);
            if ($cour) {
                $packagecourses[] = $cour;
            }
        }

        return view("admin.course.package.addpackage", compact(['courses', 'package','packagecourses']));        
}
    public function archivePackage($id)
    {
        $package = Package::find($id);
        if ($package) {
            $package->update(['is_active' => 0]);    
            return redirect()->back()->with('success', 'تم تحديث حالة الأرشيف بنجاح.');
        } else {
            return redirect()->back()->with('error', 'العنصر غير موجود.');
        }
    }
    public function unarchivePackage($id)
    {
        $package = Package::find($id);
        if ($package) {
            $package->update(['is_active' => 1]);    
            return redirect()->back()->with('success', 'تم تحديث حالة الأرشيف بنجاح.');
        } else {
            return redirect()->back()->with('error', 'العنصر غير موجود.');
        }
    }
    public function unActive()
    {
        $package = Package::where('is_active', 0)->get();
        return view("admin.course.package.archive", compact("package"));
    }
}
