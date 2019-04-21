<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MainSliderInfo;
use App\EnMainSliderInfo;
use App\Destination;
use App\EnDestination;
use App\FlightOffer;
use App\EnFlightOffer;
use App\Photo;
use App\EnPhoto;
use App\RoundTrip;
use App\OneWayTrip;
use App\Hotel;
use App\MainInfo;

class UserController extends Controller
{
    public function index()
    {
        if (app()->getLocale() == 'ar') {
            $sliders = MainSliderInfo::get();
            $destinations = Destination::get();
            $flightoffers = FlightOffer::get();
            $photos = Photo::get();
        }
        else
        {
            $sliders = EnMainSliderInfo::get();
            $destinations = EnDestination::get();
            $flightoffers = EnFlightOffer::get();
            $photos = EnPhoto::get();
        }
    	
    	return view('user.welcome',compact('sliders','destinations','flightoffers','photos'));
    }
    public function roundtrip(Request $request)
    {
    	$request->validate([
    		'from' => 'required',
    		'to' => 'required',
    		'daterange' => 'required',
    		'class' => 'required',
    		'adults' => 'required',
    		'kids' => 'required',
    		'babies' => 'required',
    	]);
    	$trip = new RoundTrip;
    	$trip->from = $request->from;
    	$trip->to = $request->to;
    	$trip->date = $request->daterange;
    	$trip->class = $request->class;
    	$trip->adults = $request->adults;
    	$trip->kids = $request->kids;
    	$trip->babies = $request->babies;
    	$trip->save();
    	return back()->with('messege','you have successfully added a trip');
    }
    public function onewaytrip(Request $request)
    {
    	$request->validate([
    		'from' => 'required',
    		'to' => 'required',
    		'date_go' => 'required',
    		'class' => 'required',
    		'adults' => 'required',
    		'kids' => 'required',
    		'babies' => 'required',
    	]);
    	$trip = new OneWayTrip;
    	$trip->from = $request->from;
    	$trip->to = $request->to;
    	$trip->date = $request->date_go;
    	$trip->class = $request->class;
    	$trip->adults = $request->adults;
    	$trip->kids = $request->kids;
    	$trip->babies = $request->babies;
    	$trip->save();
    	return back()->with('messege','you have successfully added a trip');
    }
    public function hotelbooking(Request $request)
    {
    	// return $request;
    	$request->validate([
    		'from' => 'required',
    		'hotel_date' => 'required',
    		'rooms' => 'required',
    		'adults' => 'required',
    		'kids' => 'required',
    	]);
    	$booking = new Hotel;
    	$booking->from = $request->from;
    	$booking->date = $request->hotel_date;
    	$booking->rooms = $request->rooms;
    	$booking->adults = $request->adults;
    	$booking->kids = $request->kids;
    	$booking->save();
    	return back()->with('messege','you have successfully added a trip');
    }
    public function change_lang($lang)
    {
        $language = MainInfo::where('info','lang')->get();
        $language[0]->content = $lang;
        $language[0]->save();
        return back();
    }
}
