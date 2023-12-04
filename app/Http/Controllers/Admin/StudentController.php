<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    
    public function index(){
        $students=user::where('user_type','0')->where('IsAdmin','0')->get();
        $studentCount=User::where('user_type','0')->where('IsAdmin','0')->count();
        return view('/admin/student', compact('students','studentCount'));
}
public function update(StudentEditRequest $request ,int $student)
    {

        User::findOrFail($student)->update([
            'name' => $request->name,
            'password' =>$request->password,
            'phone' =>$request->phone,
            'user_password' =>$request->password,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
    public function updateGroup(Request $request ,int $student)
    {
        $rules=[
            'grade' => ['required'],
            'group' => ['required'],
        ];
        $customMessages = [
            'grade.required' => 'مطلوب اسم المرحلة ',
            'group.required' => 'مطلوب اسم الصف ',
        ];
        
        $request->validate($rules, $customMessages);
        User::findOrFail($student)->update([
            'grade' => $request->grade,
            'group' =>$request->group,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
}
