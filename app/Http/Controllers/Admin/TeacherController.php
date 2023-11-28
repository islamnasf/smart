<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers=Teacher::get();
        return view('/admin/teacher', compact('teachers'));
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
            
            
        ]);
        if($user){
            Teacher::create([
                'name' => $user->name,
                'phone' => $user->phone,
                'password' =>$user->password,
            ]);
            $user->update([
                'user_type' =>'1',
            ]);
        }
        return back();
    }
}
