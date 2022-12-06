<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail', [HomeController::class, 'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'LoginRegistration'])->name('login-registration');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/teacher/add', [TeacherController::class, 'index'])->name('teachers.add');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teachers.manage');
    Route::post('/teacher/create',[TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
});

Route::get('/teacher/login',[TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login',[TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/dashboard',[TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');

Route::get('course/add',[CourseController::class, 'index'])->name('course.add');
Route::get('course/create',[CourseController::class, 'create'])->name('course.create');
Route::get('course/manage',[CourseController::class, 'manage'])->name('course.manage');
Route::get('course/edit/{id}',[CourseController::class, 'edit'])->name('course.edit');
Route::get('course/update/{id}',[CourseController::class, 'update'])->name('course.update');
Route::get('course/delete/{id}',[CourseController::class, 'delete'])->name('course.delete');

