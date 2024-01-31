<?php

use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\CoursesController;
use App\Http\Controllers\Api\MandubAppController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//course
Route::get('/courses',[CoursesController::class,'index']);
//books
Route::get('/books',[BooksController::class,'index']);
//
Route::get('/tutorial/{course}',[CoursesController::class,'tutorial']);
Route::get('/filedownload/{file}', [CoursesController::class, 'download']);
Route::group(['middleware'=>'api','prefix'=>'auth'],function($router){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
});
//mandub app
Route::group(['middleware'=>'api'],function($router){
    Route::get('/mandub/orders/{mandub}', [MandubAppController::class, 'index']);
    Route::get('/mandub/order/details/{order}', [MandubAppController::class, 'orderDetails']);
    Route::get('/mandub/order/details/package/{package}', [MandubAppController::class, 'packageDetails']);
    Route::post('/order/new/to/current/{order}/{mandub}', [MandubAppController::class, 'changeOrderTocurrent']);
    Route::get('/order/current/orders/{mandub}', [MandubAppController::class, 'currentOrders']);
    Route::post('/order/current/to/complate/{order}', [MandubAppController::class, 'changeOrderTocomplate']);
    Route::get('/order/complate/orders/{mandub}', [MandubAppController::class, 'complateOrders']);
    Route::get('/mandub/books/quantity/{mandub}', [MandubAppController::class, 'mandubBooks']);


 
});