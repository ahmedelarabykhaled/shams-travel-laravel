<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Photo;
use App\EnPhoto;

class PhotoAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::get();
        $enphotos = EnPhoto::get();
        return view('admin.photo album.index',compact('photos','enphotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo album.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'place' => 'required',
            'hint' => 'required',
            'url' => 'required',
        ]);
        if ($request->lang == 'ar') {
            $photo = new Photo;
        }else{
            $photo = new EnPhoto;
        }
        $photo->place = $request->place;
        $photo->hint = $request->hint;
        if ($request->hasFile('url')) {
            $photo->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/photo album'),$photo->url);
        }
        $photo->save();
        return redirect('admin/photos');
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
    public function edit($id,Request $request)
    {
        // return $req ;
        if ($request->lang == 'ar') {
            $photo = Photo::find($id);
        }else{
            $photo = EnPhoto::find($id);
        }
        return view('admin.photo album.form',compact('photo'));
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
        
        if ($request->lang == 'ar') {
            $photo = Photo::find($id);
        }else{
            $photo = EnPhoto::find($id);
        }
        $photo->hint = $request->hint;
        $photo->place = $request->place;
        if ($request->hasFile('url')) {
            // return $request->url ;
            unlink('upload/photo album/'.$photo->url);
            $photo->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/photo album'),$photo->url);
        }
        // return $request->url;
        $photo->save();
        return redirect('admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_show(Request $request)
    {
        // return $request;
        if ($request->lang == 'ar') {
            $photo = Photo::find($request->id);
        }else{
            $photo = EnPhoto::find($request->id);
        }
        $lang = $request->lang;
        return view('admin.photo album.destroy',compact('photo','lang'));
    }
    public function destroy($id,Request $request)
    {
        if ($request->lang == 'ar') {
            $photo = Photo::find($id);
        }else{
            $photo = EnPhoto::find($id);
        }
        unlink('upload/photo album/'.$photo->url);
        $photo->delete();
        return redirect('admin/photos');
    }
}
