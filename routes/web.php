<?php

use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\LandingPage\ContactUs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/grade', [GradeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified','adminCheck'])->name('dashboard');

Route::middleware('auth','verified','adminCheck')->group(function () {
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::post('/teacher', [TeacherController::class, 'store']);
    
});

require __DIR__.'/auth.php';

Route::get('/contactus', [ContactUs::class, 'index'])->name('contactus');
Route::post('post/contactus', [ContactUs::class, 'create'])->name('postContact');
