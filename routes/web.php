<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/product/{slug}', [AppController::class, 'product'])->name('product');
Route::post('/inbox', [AppController::class, 'inbox'])->name('send_message');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/submit', [AuthController::class, 'login_action'])->name('submit')->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/about_update', [AboutController::class, 'about_update'])->name('about_update');



