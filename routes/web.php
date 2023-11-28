<?php

use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ProfileController;
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
});
Route::get('/grade', [GradeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified','adminCheck'])->name('dashboard');

Route::middleware('auth','verified','adminCheck')->group(function () {
    Route::get('/teacher', [TeacherController::class, 'index'])->name('getTeacher');
    Route::post('/teacher', [TeacherController::class, 'store'])->name('postTeacher');
    Route::post('/teacher/edit/{teacher}', [TeacherController::class, 'update'])->name('updateTeacher');
});

require __DIR__.'/auth.php';
