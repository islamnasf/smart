<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Course;
use App\Models\Order;
use App\Models\Package;
use App\Models\UserCourse;
use App\Models\UserPackage;
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
    public function storePackage(Request $request, $package_id,$price)
    {
        CartItem::create([
            'user_id' => Auth::user()->id,
            'package_id' => $package_id,
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

                 $course=Course::find($item->course_id);
                 $package=Package::find($item->package_id);

                if( $item->course_id !=null && $item->price == $course->monthly_subscription_price ){
                UserCourse::create([
                    "user_id" => $item->user_id,
                    "course_id" => $item->course_id,
                    "price"=>$item->price,
                    "student_name"=> Auth::user()->name,
                    "subscrip_type"=>"اشتراك شهري"
                ]);
            }elseif(  $item->course_id !=null && $item->price == $course->term_price){
                UserCourse::create([
                    "user_id" => $item->user_id,
                    "course_id" => $item->course_id,
                    "price"=>$item->price,
                    "student_name"=> Auth::user()->name,
                    "subscrip_type"=>"اشتراك ترم"
                ]);
            }elseif( $item->package_id !=null ){
                $userpackage=UserPackage::create([
                    "user_id" => $item->user_id,
                    "package_id" => $item->package_id,
                    "price"=>$item->price,
                    "student_name"=> Auth::user()->name,
                    "subscrip_type"=> $package->package_type
                ]);
                $packages=Package::where('id',$userpackage->package_id)->first();   
                $count=$package->course->count();
                foreach($packages->course as $package){
                    UserCourse::create([
                        "user_id" => $item->user_id,
                        "course_id" => $package->id,
                        "price"=>$item->price / $count,
                        "student_name"=> Auth::user()->name,
                        "subscrip_type"=> $packages->package_type
                    ]);
                }
            }
                $cartItem = CartItem::find($item->id);
                $cartItem->delete();
            }
            return redirect()->back()->with("success", "order Done");
        }
        return redirect()->back()->with("error", "no from cart item");
    }
}
