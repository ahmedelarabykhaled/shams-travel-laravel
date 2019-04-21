<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MainSliderInfo;
use App\EnMainSliderInfo;

class MainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = MainSliderInfo::get();
        $enslides = EnMainSliderInfo::get();
        return view('admin.main slider.index',compact('slides','enslides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.main slider.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->lang;
        $request->validate([
            'comment' => 'required',
            'hint' => 'required',
            'image' => 'required',
        ]);
        if ($request->lang == 'en') {
            $slide = new EnMainSliderInfo;
        }
        else
        {
            $slide = new MainSliderInfo;
        }
        $slide->comment = $request->comment;
        $slide->hint = $request->hint;
        if ($request->hasFile('image')) {
            $slide->url = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload/main slider'),$slide->url);
        }
        $slide->save();
        return redirect('admin/mainslider')->with('messege','You Have Successfully Added New Slide');
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
    public function destroy_show($id,Request $request)
    {
        // return $request;
        if ($request->lang == 'en') {
            $slide = EnMainSliderInfo::find($id);
        }else{
            $slide = MainSliderInfo::find($id);
        }
        $lang = $request->lang;
        return view('admin.main slider.destroy',compact('slide','lang'));
    }
    public function destroy($id,Request $request)
    {
        if ($request->lang == 'en') {
            $slide = EnMainSliderInfo::find($id);
        }else{
            $slide = MainSliderInfo::find($id);
        }
        unlink('upload/main slider/'.$slide->url);
        $slide->delete();
        return redirect('admin/mainslider')->with('messege','You Have Successfully Deleted A Slide');
    }
}
