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
        $count = $cart->count();
        if ($count == 0) {
            toastr()->warning('لا يوجد عناصر في سلة المشتريات');
            return redirect()->route('dashboard');
        }
        return view('student.cart', compact('cart'));
    }

    public function store(Request $request, $course_id, $price)
    {
        CartItem::create([
            'user_id' => Auth::user()->id,
            'course_id' => $course_id,
            'price' => $price,
        ]);
        return redirect()->back();
    }
    public function delete($cart_id)
    {
        $cartItem = CartItem::find($cart_id);
        $cartItem->delete();
        return redirect()->back();
    }
}