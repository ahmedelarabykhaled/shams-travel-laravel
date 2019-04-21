<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Destination;
use App\EnDestination;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::get();
        $endestinations = EnDestination::get();
        return view('admin.destinations.index',compact('destinations','endestinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinations.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'hint' => 'required',
            'url' => 'required',
        ]);
        if ($request->lang == 'ar') {
            $dest = new Destination;
        }else{
            $dest = new EnDestination;
        }
        $dest->name = $request->name;
        $dest->hint = $request->hint;
        if ($request->hasFile('url')) {
            $dest->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/destinations'),$dest->url);
        }
        $dest->save();
        return redirect('admin/destination');
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
        if ($request->lang == 'ar') {
            $dest = Destination::find($id);
        }else{
            $dest = EnDestination::find($id);
        }
        return view('admin.destinations.form',compact('dest'));
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
        // return $request->lang;
        if ($request->lang == 'ar') {
            $dest = Destination::find($id);
        }else{
            $dest = EnDestination::find($id);
        }
        // return $dest;
        $dest->name = $request->name;
        $dest->hint = $request->hint;
        if ($request->hasFile('url')) {
            unlink('upload/destinations/'.$dest->url);
            $dest->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/destinations'),$dest->url);
        }
        $dest->save();
        return redirect('admin/destination');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_show($id)
    {
        $dest = Destination::find($id);
        return view('admin.destinations.destroy',compact('dest'));
    }
    public function destroy($id)
    {
        $dest = Destination::find($id);
        unlink('upload/destinations/'. $dest->url);
        $dest->delete();
        return redirect('admin/destination');
    }
}
