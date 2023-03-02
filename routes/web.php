<?php

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DioceseDepartmentController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ExactiveController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HealthsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ParishController;
use App\Http\Controllers\Admin\ParishDepartmentController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\SchoolsController;
use App\Http\Controllers\Admin\SermonsController;
use App\Http\Controllers\Admin\VerseController;
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
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard'); 

//site controllers
Route::get('/catholic_diocese',[SitePagesController::class, 'catholic_diocese'])->name('catholic_diocese');

Route::get('/research_institute',[SitePagesController::class,'research'])->name('research_institute');

Route::get('/departiment',[SitePagesController::class,'departiment'])->name('departiment');

Route::get ('/contact',[SitePagesController::class,'contact'])->name('contact');

Route::get('/schools', [SitePagesController::class, 'schools'])->name('schools');
Route::get('/healths', [SitePagesController::class, 'healths'])->name('healths');


//Admin Route
//Route::get('/admin/dashboard',[DashboardController::class, 'index']);

//news routes
Route::get('/admin/news',[NewsController::class, 'index'])->name('admin_news');
Route::post('/admin/add_news',[NewsController::class, 'store'])->name('admin_addnews');
Route::get('/admin/edit_news/{id}', [NewsController::class, 'edit'])->name('admin_editnews');
Route::get('/admin/delete_news/{id}', [NewsController::class, 'destroy'])->name('admin_deletenews');
Route::put('/admin/update_news/{id}', [NewsController::class, 'update'])->name('admin_updatenews');

//events route
Route::get('/admin/events',[EventsController::class, 'index'])->name('admin_events');
Route::post('/admin/add_events',[EventsController::class, 'store'])->name('admin_addevents');
Route::get('/admin/edit_events/{id}', [EventsController::class, 'edit'])->name('admin_editevents');
Route::get('/admin/delete_events/{id}', [EventsController::class, 'destroy'])->name('admin_deleteevents');
Route::put('/admin/update_events/{id}', [EventsController::class, 'update'])->name('admin_updateevents');

//parish route
Route::get('/admin/parish',[ParishController::class, 'index'])->name('admin_parish');
Route::post('/admin/add_parish',[ParishController::class, 'store'])->name('admin_addparish');
Route::get('/admin/edit_parish/{id}', [ParishController::class, 'edit'])->name('admin_editparish');
Route::get('/admin/delete_parish/{id}', [ParishController::class, 'destroy'])->name('admin_deleteparish');
Route::put('/admin/update_parish/{id}', [ParishController::class, 'update'])->name('admin_updateparish');

//school route
Route::get('/admin/school',[SchoolsController::class, 'index'])->name('admin_school');
Route::post('/admin/add_school',[SchoolsController::class, 'store'])->name('admin_addschool');
Route::get('/admin/edit_school/{id}', [SchoolsController::class, 'edit'])->name('admin_editschool');
Route::get('/admin/delete_school/{id}', [SchoolsController::class, 'destroy'])->name('admin_deleteschool');
Route::put('/admin/update_school/{id}', [SchoolsController::class, 'update'])->name('admin_updateschool');

//health institute route
Route::get('/admin/health',[HealthsController::class, 'index'])->name('admin_health');
Route::post('/admin/add_health',[HealthsController::class, 'store'])->name('admin_addhealth');
Route::get('/admin/edit_health/{id}', [HealthsController::class, 'edit'])->name('admin_edithealth');
Route::get('/admin/delete_health/{id}', [HealthsController::class, 'destroy'])->name('admin_deletehealth');
Route::put('/admin/update_health/{id}', [HealthsController::class, 'update'])->name('admin_updatehealth');

//About us route
Route::get('/admin/summary',[AboutUsController::class, 'summary'])->name('diocese_summary');
Route::post('/admin/add_summary',[AboutUsController::class, 'store'])->name('add_summary');

//Sermons route
Route::get('/admin/sermons',[SermonsController::class, 'index'])->name('admin_sermons');
Route::post('/admin/add_sermons',[SermonsController::class, 'store'])->name('add_sermons');
Route::get('/admin/edit_sermons/{id}', [SermonsController::class, 'edit'])->name('edit_sermons');
Route::get('/admin/delete_sermons/{id}', [SermonsController::class, 'destroy'])->name('delete_sermons');
Route::put('/admin/update_sermons/{id}', [SermonsController::class, 'update'])->name('update_sermons');

//Verse of day route
Route::get('/admin/verse',[VerseController::class, 'index'])->name('admin_verse');
Route::post('/admin/add_verse',[VerseController::class, 'store'])->name('add_verse');
Route::get('/admin/edit_verse/{id}', [VerseController::class, 'edit'])->name('edit_verse');
Route::get('/admin/delete_verse/{id}', [VerseController::class, 'destroy'])->name('delete_verse');
Route::put('/admin/update_verse/{id}', [VerseController::class, 'update'])->name('update_verse');

//Gallery route
Route::get('/admin/gallery',[GalleryController::class, 'index'])->name('admin_gallery');
Route::post('/admin/add_gallery',[GalleryController::class, 'store'])->name('add_gallery');
Route::get('/admin/edit_gallery/{id}', [GalleryController::class, 'edit'])->name('edit_gallery');
Route::get('/admin/delete_gallery/{id}', [GalleryController::class, 'destroy'])->name('delete_gallery');
Route::put('/admin/update_gallery/{id}', [GalleryController::class, 'update'])->name('update_gallery');

Route::get('/admin/exactives',[ExactiveController::class,'index'])->name('admin_exactive_staff');
Route::get('/admin/research',[ResearchController::class,'index'])->name('admin_research');
Route::get('/admin/Diocese_Department',[ParishDepartmentController::class,'index'])->name('admin_ParishDepartment');
Route::get('/admin/Parish_Department',[DioceseDepartmentController::class,'index'])->name('admin_DioceseDepartment');




