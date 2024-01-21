<?php

use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\Api\CoursesController;
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