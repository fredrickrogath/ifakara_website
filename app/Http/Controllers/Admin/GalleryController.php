<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::all();
        return view('admin.pages.whats_new.gallery', compact('gallery'));
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
        $gallery = new gallery();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/gallery',$filename);
            $gallery->image = $filename;
        }
        $gallery->media = $request->input('media');
        $gallery->category = $request->input('category');
        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');
        if($gallery->save()){
            return redirect('/admin/gallery')->with('status', 'Gallery Added SuccessFully!');
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
        $gallery = gallery::find($id);
        return view('admin.pages.whats_new.edit_gallery', compact('gallery'));
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
        $gallery = gallery::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/gallery'.$gallery->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/gallery',$filename);
            $gallery->image = $filename;
        }
        $gallery->media = $request->input('media');
        $gallery->category = $request->input('category');
        $gallery->name = $request->input('name');
        $gallery->description = $request->input('description');
        
        $gallery->update();
        return redirect('/admin/gallery')->with('status', 'Gallery was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = gallery::find($id);
        if($gallery->image){
            $path = 'admin/assets/images/gallery/'.$gallery->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $gallery->delete();
        return redirect('/admin/gallery')->with('status', 'Gallery deleted Successfully');
    }
}
