<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StudentController;
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


route::group(['middleware' => ['auth', 'verified', 'adminCheck'], 'prefix' => 'dashboard'], function () {
  //student->admin
    Route::get('/student', [StudentController::class, 'index'])->name('getStudent');
    // Route::post('/student', [StudentController::class, 'store'])->name('postStudent');
    Route::post('/student/edit/{student}', [StudentController::class, 'update'])->name('updateStudent');
    Route::post('/student/edit/group/{student}', [StudentController::class, 'updateGroup'])->name('updateGroupStudent');
  //teacher->admin
    Route::get('/teacher', [TeacherController::class, 'index'])->name('getTeacher');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('postTeacher');
    Route::post('/teacher/edit/{teacher}', [TeacherController::class, 'update'])->name('updateTeacher');
    //dashboard
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    //
    Route::get('/getContact', [ContactController::class, 'index'])->name('getContact');
    Route::post('/deleteContact/{id}', [ContactController::class, 'delete'])->name('deleteContact');
});

require __DIR__ . '/auth.php';

Route::get('/contactus', [ContactUs::class, 'index'])->name('contactus');
Route::post('post/contactus', [ContactUs::class, 'create'])->name('postContact');


