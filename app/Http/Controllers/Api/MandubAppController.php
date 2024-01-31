<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AnotherPackage;
use App\Models\Book;
use App\Models\City;
use App\Models\MandubBook;
use App\Models\MandubCity;
use App\Models\OrderBookDetail;
use App\Models\OrderBookItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MandubAppController extends Controller
{
    public function index($mandub)
    {
        $mandubcity = MandubCity::where('mandoub_id', $mandub)->first();
        $city = city::where('id', $mandubcity->city_id)->first();
        $orders = OrderBookDetail::where('city_id', $city->id)->where('status', 'new')->get();
        return response()->json([
            'status' => 200,
            'city' => $city,
            'orders' => $orders,
        ], 200);
    }
    public function orderDetails($order)
    {
        $orderdetails = OrderBookItem::where('order_id', $order)
            ->where(function ($query) {
                $query->has('package')->orWhereHas('book');
            })->with('package')->with('book')
            ->get();
        return response()->json([
            'status' => 200,
            'orderdetails' => $orderdetails,
        ], 200);
    }

    public function packageDetails($package)
    {
        $packagedetails = AnotherPackage::where('id', $package)->with('book')->get();
        return response()->json([
            'status' => 200,
            'packagedetails' => $packagedetails,
        ], 200);
    }
    public function changeOrderTocurrent($order, $mandub)
    {
        $neworder = OrderBookDetail::where('id', $order)->first();
        $neworder->update([
            'status' => 'current',
            'mandub_id' => $mandub
        ]);
        return response()->json([
            'status' => 200,
            'order' => $neworder,
        ], 200);
    }
    public function currentOrders($mandub)
    {
        $currentorder = OrderBookDetail::where('mandub_id', $mandub)->where('status', 'current')->get();
        return response()->json([
            'status' => 200,
            'orders' => $currentorder,
        ], 200);
    }

    public function changeOrderTocomplate($order)
    {
        $currentorder = OrderBookDetail::where('id', $order)->first();
        $currentorder->update([
            'status' => 'complate'
        ]);
        return response()->json([
            'status' => 200,
            'order' => $currentorder,
        ], 200);
    }
    public function complateOrders($mandub)
    {
        $complateorder = OrderBookDetail::where('mandub_id', $mandub)->where('status', 'complate')->get();
        return response()->json([
            'status' => 200,
            'orders' => $complateorder,
        ], 200);
    }
    public function mandubBooks($mandub){
        $mandubStore=User::where('id',$mandub)->with('mandubBooks')->get();
        return response()->json([
            'status' => 200,
            'namdubStore' => $mandubStore,
        ], 200);

    }
    public function booksandpackagesClasses(){
        $books=Book::all();
        $packages=AnotherPackage::all();
        return response()->json([
            'status' => 200,
            'books' => $books,
            'packages' => $packages,
        ], 200);
    }
    
}
