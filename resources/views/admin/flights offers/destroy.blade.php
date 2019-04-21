@extends('layouts.admin')
@section('style')

.card
{
	height: auto;
}
h3
{
	color: rgba(0,0,0,0.5);
}

@stop
@section('content')

<div class="card m-5 p-5">
	<div class="text-center">
		<h2 class="" style="color: red">Do You Wante To Delete This Flight Offer</h2>
		<form action="{{url('admin/flightsoffers',$flightoffer->id)}}" method="post" class="mt-4 d-inline ">
			@csrf()
			@method('DELETE')
			<input type="hidden" name="lang" value="{{$flightoffer->language}}" />
			<button type="submit" class="btn btn-danger p-3">DELETE</button>
		</form>
	</div>
	<div class="my-5">
		<h3 class="d-inline">Country :</h3>
		<h2 class="d-inline">{{$flightoffer->country}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">place :</h3>
		<h2 class="d-inline">{{$flightoffer->place}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">duration :</h3>
		<h2 class="d-inline">{{$flightoffer->duration}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">coast :</h3>
		<h2 class="d-inline">{{$flightoffer->coast}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">image :</h3>
		<img src="{{url('upload/flights offers',$flightoffer->url)}}" style="width: 200px;height: 200px;">
		<br/>
	</div>
</div>

@stop