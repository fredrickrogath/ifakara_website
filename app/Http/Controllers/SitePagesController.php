<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\gallery;
use App\Models\news;
use App\Models\service;
use App\Models\verse;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SitePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function catholic_diocese()
    { 
        $news = news::latest('id')->limit(4)->get();
        $events = events::latest('id')->limit(4)->get();
        $gallery_photo = gallery::all()->where('category', '=', 'Photo');
        return view('pages.catholic_diocese',compact('gallery_photo','news','events'));
    }

    public function research(){
        return view('pages.reseach_inst');
    }


    public function departiment(){
        return view('pages.departiment');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function schools(){
        return view('pages.schools');
    }

    public function healths(){
        return view('pages.healths');
    }

    public function news_single($id){
        $news = news::find($id);
        $latest = news::latest('id')->limit(7)->get();
        return View('pages.single_news', compact('news', 'latest'));
    }
    
    public function single_events($id){
        $events = events::find($id);
        $latest = events::latest('id')->limit(7)->get();
        return View('pages.single_events', compact('events', 'latest'));
    }

    public function single_service_education($id){
        $education_service = service::find($id);
        return View('pages.single_education_service', compact('education_service'));
    }

    public function single_service_bible($id){
        $bible_service = service::find($id);
        return View('pages.single_bible_service', compact('bible_service'));
    }

    public function single_service_health($id){
        $health_service = service::find($id);
        return View('pages.single_health_service', compact('health_service'));
    }

    public function news_event(){
        $news = news::latest('id')->get();
        $events = events::latest('id')->get();
        return View('pages.news_events',compact('news','events'));
    }

    public function singleandnews(){
       
        return View('pages.single_news');
    }

    public function gallery(){
        return View('pages.gallery');
    }

    public function video(){
        return view('pages.video');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
