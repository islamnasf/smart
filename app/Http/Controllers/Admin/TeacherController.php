<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers=user::where('user_type','1')->where('IsAdmin','0')->get();
        $count=user::where('user_type','1')->where('IsAdmin','0')->count();
        return view('/admin/teacher', compact('teachers','count'));
        }

    public function store(Request $request)
    {
        $rules=[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'unique:'.User::class],
            'password' => ['required'],
        ];
        $customMessages = [
            'phone.unique' => 'هذاالفون موجود مسبقا',
        ];
        
        $request->validate($rules, $customMessages);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' =>$request->password,
            'user_password' =>$request->password,
        ]);
        if($user){
       
            $user->update([
                'user_type' =>'1',
            ]);
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

    public function update(Request $request ,int $teacher)
    {
        $rules=[
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required'],
        ];
        $customMessages = [
            'phone.unique' => 'هذاالفون موجود مسبقا',
        ];
        
        $request->validate($rules, $customMessages);
        User::findOrFail($teacher)->update([
            'name' => $request->name,
            'password' =>$request->password,
            'user_password' =>$request->password,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
        //sdksdnfklsdfnkds
    }
}
