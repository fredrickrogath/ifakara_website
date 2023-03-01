<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = sermon::all();
        return view('admin.pages.whats_new.sermons', compact('sermons'));
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
        $sermons = new sermon();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/sermons',$filename);
            $sermons->image = $filename;
        }
        $sermons->sermons_title = $request->input('sermons_title');
        $sermons->video = $request->input('video');
        $sermons->name = $request->input('name');
        if($sermons->save()){
            return redirect('/admin/sermons')->with('status', 'Sermons Added SuccessFully!');
        }
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
        $sermons = sermon::all();
        return view('admin.pages.whats_new.edit_sermon', compact('sermons'));   
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
        $sermons = sermon::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/sermons'.$sermons->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/sermons',$filename);
            $sermons->image = $filename;
        }
        $sermons->sermons_title = $request->input('sermons_title');
        $sermons->video = $request->input('video');
        $sermons->name = $request->input('name');
        
        $sermons->update();
        return redirect('/admin/sermons')->with('status', 'Sermons was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sermons = sermon::find($id);
        if($sermons->image){
            $path = 'admin/assets/images/sermons/'.$sermons->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $sermons->delete();
        return redirect('/admin/sermons')->with('status', 'Sermons deleted Successfully');
    }
}
