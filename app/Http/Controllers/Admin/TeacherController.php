<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers=user::where('user_type','teacher')->get();
        $count=user::where('user_type','teacher')->count();
        return view('/admin/teacher', compact('teachers','count'));
        }

    public function store(Request $request)
    {
        $rules=[
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'unique:'.User::class ,'digits:8'],
            'password' => ['required'],
        ];
        $customMessages = [
            'name.required' => 'يجب ادخال الاسم   ',
            'phone.required' => 'يجب ادخال رقم الهاتف    ',
            'password.required' => 'يجب ادخال كلمة السر      ',
            'phone.unique' => 'هذا الفون موجود مسبقا',
            'phone.digits' => 'رقم الهاتف  يجب ان يكون 8 ارقام فقط   ',      

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
                'user_type' =>'teacher',
            ]);
        }
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }

    public function update(Request $request ,int $teacher)
    {
        $rules=[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required','digits:8'],
            'password' => ['required'],
        ];
        $customMessages = [
            'name.required' => 'يجب ادخال الاسم   ',
            'phone.required' => 'يجب ادخال رقم الهاتف    ',
            'password.required' => 'يجب ادخال كلمة السر      ',
            'phone.unique' => 'هذا الفون موجود مسبقا',
            'phone.digits' => 'رقم الهاتف  يجب ان يكون 8 ارقام فقط   ',      
          ];
        
        $request->validate($rules, $customMessages);
        User::findOrFail($teacher)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' =>$request->password,
            'user_password' =>$request->password,
        ]);
        toastr()->success('تم حفظ البيانات بنجاح');
        return back();
    }
}
