<?php

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

use  Illuminate\Support\Facades\Hash;

Route::group(['prefix'=>'/','middleware'=>['status','lang']], function(){
	Route::get('/','User\UserController@index');
	Route::post('/roundtrip','User\UserController@roundtrip');
	Route::post('/onewaytrip','User\UserController@onewaytrip');
	Route::post('/hotelbooking','User\UserController@hotelbooking');
	Route::get('lang/{lang}','User\UserController@change_lang');
});

Route::get('addadmin',function(){
	$admin = new App\Admin;
	$admin->name = 'ahmed';
	$admin->email = 'ahmed@yahoo.com';
	$admin->password = Hash::make('111111');
	$admin->save();
	return redirect('/');
});


Route::get('admin','Admin\LoggingController@index');
Route::post('login','Admin\LoggingController@login');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::get('logout','Admin\LoggingController@logout');
	Route::resource('dashboard','Admin\DashboardController');
	Route::get('active','Admin\DashboardController@active');
	Route::get('deactive','Admin\DashboardController@deactive');
	Route::resource('destination','Admin\DestinationsController');
	Route::get('destinations/{id}','Admin\DestinationsController@destroy_show');
	Route::resource('flightsoffers','Admin\FlightOffersController');
	Route::get('flightsoffer/{id}','Admin\FlightOffersController@destroy_show');
	Route::resource('photos','Admin\PhotoAlbumController');
	Route::get('photo','Admin\PhotoAlbumController@destroy_show');
	Route::resource('mainslider','Admin\MainSliderController');
	Route::get('mainslide/{id}','Admin\MainSliderController@destroy_show');
	
});

Route::get('websiteoff',function(){
	$maininfo = \App\MainInfo::where('info','status')->get();
	if ($maininfo[0]->status == '1') {
		return redirect('/');
	}
		return view('websiteoff');
	});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
