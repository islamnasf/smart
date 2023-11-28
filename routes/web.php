<?php

use App\Http\Controllers\Admin\ContactController;
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



<<<<<<< HEAD
route::group(['middleware' => ['auth', 'verified', 'adminCheck'], 'prefix' => 'dashboard'], function () {
    Route::get('/teacher', [TeacherController::class, 'index'])->name('getTeacher');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('postTeacher');

    Route::get('/', function () {
        return view('/admin/dashboard');
    })->name('dashboard');

    Route::get('/getContact', [ContactController::class, 'index'])->name('getContact');
    Route::post('/deleteContact/{id}', [ContactController::class, 'delete'])->name('deleteContact');
=======
Route::middleware('auth','verified','adminCheck')->group(function () {
    Route::get('/teacher', [TeacherController::class, 'index'])->name('getTeacher');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('postTeacher');
    Route::post('/teacher/edit/{teacher}', [TeacherController::class, 'update'])->name('updateTeacher');
>>>>>>> a4c0b0ee5cc2e11b1d8a88a9469151c8570526e2
});

require __DIR__ . '/auth.php';

Route::get('/contactus', [ContactUs::class, 'index'])->name('contactus');
Route::post('post/contactus', [ContactUs::class, 'create'])->name('postContact');


