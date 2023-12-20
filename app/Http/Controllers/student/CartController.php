<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = CartItem::where("user_id", Auth::user()->id)->get();
        return view('student.cart', compact('cart'));
    }
    
    public function store(Request $request, $course_id)
    {
        CartItem::create([
            'user_id' => Auth::user()->id,
            'course_id' => $course_id,
        ]);
        return redirect()->back();
    }
}
