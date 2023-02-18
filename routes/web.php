<?php

use App\Http\Controllers\Admin\AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExactiveController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\newsController;

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
Route::post('/admin_login',[LoginController::class, 'customLogin'])->name('admin_login');
Route::get('/signout', [LoginController::class, 'signOut']);
Route::get('dashboard', [LoginController::class, 'dashboard']); 

// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   
//     /**
//      * Home Routes
//      */
//    // Route::get('/login',[AdminHomeController::class, 'index'])->name('cms');

//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Login Routes
//          */
//         Route::get('/login',[LoginController::class, 'index']);
//         Route::get('/login',[LoginController::class, 'login']);

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', [LogoutController::class, 'perform']);
//     });
// });

//site controllers

Route::get('/catholic_diocese',[SitePagesController::class, 'catholic_diocese'])->name('catholic_diocese');

Route::get('/research_institute',[SitePagesController::class,'research'])->name('research_institute');

Route::get('/departiment',[SitePagesController::class,'departiment'])->name('departiment');

Route::get ('/contact',[SitePagesController::class,'contact'])->name('contact');

//Admin Route
Route::get('/admin/dashboard',[DashboardController::class, 'index']);
Route::get('/admin/news',[DashboardController::class, 'news'])->name('news');
Route::get('/admin/events',[DashboardController::class, 'events'])->name('events');
Route::get('/admin/exactives',[ExactiveController::class,'index'])->name('exactive_staff');


//news route
Route::resource('news', newsController::class);

//events route
Route::resource('events', eventsController::class);




