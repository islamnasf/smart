<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileSettingController extends Controller
{
  public function index(){
    $user_id=Auth::user()->id;
    $data=User::select("*")->where('id',$user_id)->first();
    return view('/admin/profile', compact('data'));  
  }
}
