<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\InboxController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InformationController;

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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/about', [AboutController::class, 'index'])->name('about')->middleware('auth');
Route::post('/about_update', [AboutController::class, 'about_update'])->name('about_update')->middleware('auth');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery')->middleware('auth');
Route::post('/gallery_add', [GalleryController::class, 'gallery_add'])->name('gallery_add')->middleware('auth');
Route::post('/gallery_update', [GalleryController::class, 'gallery_update'])->name('gallery_update')->middleware('auth');
Route::get('/gallery_delete/{id}', [GalleryController::class, 'gallery_delete'])->name('gallery_delete')->middleware('auth');

Route::get('/contact/inbox', [InboxController::class, 'index'])->name('inbox')->middleware('auth');
Route::get('/inbox_delete/{id}', [InboxController::class, 'inbox_delete'])->name('inbox_delete')->middleware('auth');

Route::get('/contact/information', [InformationController::class, 'index'])->name('information')->middleware('auth');
Route::post('/contact_update', [InformationController::class, 'contact_update'])->name('contact_update')->middleware('auth');
Route::post('/sosmed_update', [InformationController::class, 'sosmed_update'])->name('sosmed_update')->middleware('auth');

Route::get('/setting', [SettingController::class, 'index'])->name('setting')->middleware('auth');
Route::post('/general_update', [SettingController::class, 'general_update'])->name('general_update')->middleware('auth');
Route::post('/seo_update', [SettingController::class, 'seo_update'])->name('seo_update')->middleware('auth');

Route::get('/product_list', [ProductController::class, 'index'])->name('product_list')->middleware('auth');
Route::get('/product_add', [ProductController::class, 'product_add'])->name('product_add')->middleware('auth');
Route::get('/product_delete/{id}', [ProductController::class, 'product_delete'])->name('product_delete')->middleware('auth');
Route::post('/product_submit', [ProductController::class, 'product_submit'])->name('product_submit')->middleware('auth');
Route::get('/product_edit/{id}', [ProductController::class, 'product_edit'])->name('product_edit')->middleware('auth');
