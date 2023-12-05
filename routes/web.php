<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileSettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\SecretaryController;
use App\Http\Controllers\LandingPage\ContactUs;
use App\Http\Controllers\PageController;
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

Route::fallback(function () {
  return view("errors.404");
});


route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard'], function () {
  //student->admin
  Route::get('/student', [StudentController::class, 'index'])->name('getStudent');
  // Route::post('/student', [StudentController::class, 'store'])->name('postStudent');
  Route::post('/student/edit/{student}', [StudentController::class, 'update'])->name('updateStudent');
  Route::post('/student/updateStudent/{student}', [StudentController::class, 'updateGroup'])->name('updateGroupStudent');

  //teacher->admin
  Route::get('/teacher', [TeacherController::class, 'index'])->name('getTeacher');
  Route::post('/teacher', [TeacherController::class, 'store'])->name('postTeacher');
  Route::post('/teacher/edit/{teacher}', [TeacherController::class, 'update'])->name('updateTeacher');
  //secretary->admin
  Route::get('/book', [BookController::class, 'index'])->name('getBook');
  Route::post('/book', [BookController::class, 'store'])->name('postBook');
  Route::post('/book/edit/{book}', [BookController::class, 'update'])->name('updateBook');
  //book->admin
  Route::get('/secretary', [SecretaryController::class, 'index'])->name('getSecretary');
  Route::post('/secretary', [SecretaryController::class, 'store'])->name('postSecretary');
  Route::post('/secretary/edit/{secretary}', [SecretaryController::class, 'update'])->name('updateSecretary');

  //dashboard
  Route::get('/', [HomeController::class, 'index'])->name('dashboard');
  //exam->admin
  Route::get('/exam', [ExamController::class, 'index'])->name('getExam');
  Route::post('/exam', [ExamController::class, 'store'])->name('postExam');
  Route::post('/exam/edit', [ExamController::class, 'update'])->name('updateExam');
  Route::post('/exam/delete', [ExamController::class, 'delete'])->name('deleteExam');
  Route::get('/examdownload/{fileName}', [ExamController::class, 'download'])->name('examDownload');
  //
  Route::get('/getContact', [ContactController::class, 'index'])->name('getContact');
  Route::post('/deleteContact/{id}', [ContactController::class, 'delete'])->name('deleteContact');

  Route::get('/profileSetting', [ProfileSettingController::class, 'index'])->name('getProfile');
  Route::post('/profileSetting/{id}', [ProfileSettingController::class, 'update'])->name('updateProfile');

  Route::get('course/home', [CourseController::class, 'index'])->name('course');
  Route::get('course/add', [CourseController::class, 'create'])->name('addCourse');
  Route::post('course/create', [CourseController::class, 'store'])->name('createCourse');
  Route::get('course/termone/show', [CourseController::class, 'termone'])->name('showTermone');
  Route::get('course/termtow/show', [CourseController::class, 'termtow'])->name('showTermtow');
  Route::get('course/edit/show/{id}', [CourseController::class, 'showEdit'])->name('showEditCourse');
  Route::post('course/delete/{courseId}', [CourseController::class, 'delete'])->name('deleteCourse');
  Route::post('course/update/{id}', [CourseController::class, 'update'])->name('updateCourse');
});

require __DIR__ . '/auth.php';

Route::get('/contactus', [ContactUs::class, 'index'])->name('contactus');
Route::post('post/contactus', [ContactUs::class, 'create'])->name('postContact');


