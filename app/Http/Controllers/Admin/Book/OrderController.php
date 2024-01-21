<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use App\Models\OrderBookDetail;
use App\Models\OrderBookItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function neworder()
    {
        $orders=OrderBookDetail::where('status','new')->get();
        return view('admin/book/orders/newOrder',compact('orders'));
    }
    public function deleteNewOrderDetails(int $order){
        $order_one=OrderBookDetail::where('id',$order)->first();
        $order_one->delete();
        toastr()->success('تم حذف البيانات بنجاح');
        return back();
    }
    public function neworderDetails(int $id){
        $order=OrderBookDetail::where('id',$id)->first();
        $order_items=OrderBookItem::where('order_id',$id)->get();
        return view('admin/book/orders/orderDetails',compact('order','order_items'));
    }
}