<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DioceseDepartmentController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ExactiveController;
use App\Http\Controllers\Admin\HealthsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ParishController;
use App\Http\Controllers\Admin\ParishDepartmentController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\SchoolsController;
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

//Auth Admin Route
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/admin_login',[LoginController::class, 'Admin_Login'])->name('admin_login');
Route::post('/signout', [LoginController::class, 'signOut'])->name('signout');
Route::get('/dashboard', [LoginController::class, 'dashboard']); 

//site controllers
Route::get('/catholic_diocese',[SitePagesController::class, 'catholic_diocese'])->name('catholic_diocese');

Route::get('/research_institute',[SitePagesController::class,'research'])->name('research_institute');

Route::get('/departiment',[SitePagesController::class,'departiment'])->name('departiment');

Route::get ('/contact',[SitePagesController::class,'contact'])->name('contact');

Route::get('/schools', [SitePagesController::class, 'schools'])->name('schools');
Route::get('/healths', [SitePagesController::class, 'healths'])->name('healths');


//Admin Route
//Route::get('/admin/dashboard',[DashboardController::class, 'index']);
Route::get('/admin/news',[NewsController::class, 'index'])->name('admin_news');
Route::get('/admin/events',[EventsController::class, 'index'])->name('admin_events');
Route::get('/admin/exactives',[ExactiveController::class,'index'])->name('admin_exactive_staff');
Route::get('/admin/parish',[ParishController::class,'index'])->name('admin_parish');
Route::get('/admin/schools',[SchoolsController::class,'index'])->name('admin_schools');
Route::get('/admin/healths',[HealthsController::class,'index'])->name('admin_healths');
Route::get('/admin/research',[ResearchController::class,'index'])->name('admin_research');
Route::get('/admin/Diocese_Department',[ParishDepartmentController::class,'index'])->name('admin_ParishDepartment');
Route::get('/admin/Parish_Department',[DioceseDepartmentController::class,'index'])->name('admin_DioceseDepartment');




