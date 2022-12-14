<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/service', [WelcomeController::class, 'service'])->name('service');
Route::get('/blog-detail/{id}', [WelcomeController::class, 'detail'])->name('blog-detail');
Route::post('/full-name', [WelcomeController::class, 'fullName'])->name('full-name');
Route::post('/calculator', [WelcomeController::class, 'calculator'])->name('calculator');
