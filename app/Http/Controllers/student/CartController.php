<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\UserCourse;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = CartItem::where("user_id", Auth::user()->id)->get();
        $count = $cart->count();
        $sumPrice = $cart->sum("price");
        if ($count == 0) {
            toastr()->warning('لا يوجد عناصر في سلة المشتريات');
            return redirect()->route('dashboard');
        }
        return view('student.cart', compact('cart', 'sumPrice'));
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

    public function order()
    {
        $cart = CartItem::where("user_id", Auth::user()->id)->get();
        $sumPrice = $cart->sum("price");
        if ($sumPrice !== 0) {
            foreach ($cart as $item) {
                Order::create([
                    "cart_items_id" => $item->id,
                    "total_price" => $sumPrice,
                ]);
                UserCourse::create([
                    "user_id" => $item->user_id,
                    "course_id" => $item->course_id,
                ]);
                $cartItem = CartItem::find($item->id);
                $cartItem->delete();
            }
            return redirect()->back()->with("success", "order Done");
        }
        return redirect()->back()->with("error", "no from cart item");
    }
}
