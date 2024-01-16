<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function neworder()
    {
        return view('admin/book/orders/newOrder');
    }
    public function neworderDetails(){
        return view('admin/book/orders/orderDetails');
    }
}
