<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SitePagesController;

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




Route::get('/',[HomeController::class, 'index']);

Route::get('/login',[LoginController::class, 'index']);

//Admin Route
Route::get('/admin/dashboard',[DashboardController::class, 'index']);
Route::get('/admin/news',[DashboardController::class, 'news'])->name('news');
Route::get('/admin/events',[DashboardController::class, 'events'])->name('events');

Route::get('/catholic_diocese',[SitePagesController::class, 'catholic_diocese'])->name('catholic_diocese');

Route::get('/research_institute',[SitePagesController::class,'research'])->name('research_institute');

Route::get('/departiment',[SitePagesController::class,'departiment'])->name('departiment');

Route::get ('/contact',[SitePagesController::class,'contact'])->name('contact');

