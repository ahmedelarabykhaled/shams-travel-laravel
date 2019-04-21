<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\FlightOffer;
use App\EnFlightOffer;

class FlightOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flightsoffers = FlightOffer::get();
        $enflightsoffers = EnFlightOffer::get();
        return view('admin.flights offers.index',compact('flightsoffers','enflightsoffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flights offers.form');
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
            'country' => 'required',
            'place' => 'required',
            'duration' => 'required',
            'coast' => 'required',
            'url' => 'required',
        ]);

        if ($request->lang == 'ar') {
            $flightoffer = new FlightOffer;
        }else{
            $flightoffer = new EnFlightOffer;
        }

        $flightoffer->country = $request->country;
        $flightoffer->place = $request->place;
        $flightoffer->duration = $request->duration;
        $flightoffer->coast = $request->coast;
        if ($request->hasFile('url')) {
            $flightoffer->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/flights offers'),$flightoffer->url);
        }
        $flightoffer->save();
        return redirect('admin/flightsoffers');
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
            $flight = FlightOffer::find($id);
        }else{
            $flight = EnFlightOffer::find($id);
        }
        return view('admin.flights offers.form',compact('flight'));
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
        // return $request;
        $request->validate([
            'country' => 'required',
            'place' => 'required',
            'duration' => 'required',
            'coast' => 'required',
            'url' => 'required',
        ]);

        if ($request->lang == 'en') {
            $flight = EnFlightOffer::find($id);
        }else{
            $flight = FlightOffer::find($id);
        }
        $flight->country = $request->country;
        $flight->place = $request->place;
        $flight->duration = $request->duration;
        $flight->coast = $request->coast;
        if($request->hasFile('url')){
            unlink('upload/flights offers/'.$flight->url);
            $flight->url = time().'.'.$request->url->getClientOriginalExtension();
            $request->url->move(public_path('upload/flights offers'),$flight->url);
        }
        $flight->save();
        return redirect('admin/flightsoffers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_show($id,Request $request)
    {
        if ($request->lang == 'ar') {
            $flightoffer = FlightOffer::find($id);
        }else{
            $flightoffer = EnFlightOffer::find($id);
        }
        
        return view('admin.flights offers.destroy',compact('flightoffer'));
    }
    public function destroy($id,Request $request)
    {
        if ($request->lang == 'ar') {
            $flight = FlightOffer::find($id);
        }else{
            $flight = EnFlightOffer::find($id);
        }
        // return $flight;  
        unlink('upload/flights offers/'.$flight->url);
        $flight->delete();
        return redirect('admin/flightsoffers');
    }
}
