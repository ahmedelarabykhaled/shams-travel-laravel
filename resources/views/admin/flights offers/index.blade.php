@extends('layouts.admin')
@section('style')
.card
{
	height: auto
}
.ar-body
{
	display: none;
}
@stop
@section('content')
<div class="card m-5 p-5">
	<h1 class="text-center">Flights Offers</h1>
	<div>
		<a href="{{url('admin/flightsoffers/create')}}" class="btn btn-primary fa-lg p-3">Add New Flight Offer</a>
	</div>

	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div>
		<table class="table mt-4 table-hover">
			<thead>
				<tr>
					<th>Country :</th>
					<th>Place :</th>
					<th>duration :</th>
					<th>coast :</th>
					<th>Image :</th>
					<th>Option :</th>
				</tr>
			</thead>
			<tbody class="ar-body">
				@if(sizeof($flightsoffers) > 0)
					@foreach($flightsoffers as $flight)
						<tr>
							<td>{{$flight->country}}</td>
							<td>{{$flight->place}}</td>
							<td>{{$flight->duration}}</td>
							<td>{{$flight->coast}}</td>
							<td>
								<img src="{{url('upload/flights offers',$flight->url)}}" style="width: 200px;height: 200px;">
							</td>
							<td>
								<form action="{{url('admin/flightsoffer',$flight)}}" method="get">
									<input type="hidden" name="lang" value="ar" />
									<button type="submit" class="btn btn-danger p-3">Delete</button>
								</form>
								<form action="{{route('flightsoffers.edit',$flight,'edit')}}" method="get">
									<!-- <input type="hidden" name="lang" value="ar" /> -->
									<button type="submit" class="btn btn-warning p-3">Modify</button>
								</form>
							</td>
						</tr>
					@endforeach
				@else
					<h2>There Are No Flights Offers</h2>
				@endif
			</tbody>
			<tbody class="en-body">
				@if(sizeof($flightsoffers) > 0)
					@foreach($enflightsoffers as $flight)
						<tr>
							<td>{{$flight->country}}</td>
							<td>{{$flight->place}}</td>
							<td>{{$flight->duration}}</td>
							<td>{{$flight->coast}}</td>
							<td>
								<img src="{{url('upload/flights offers',$flight->url)}}" style="width: 200px;height: 200px;">
							</td>
							<td>
								<form action="{{url('admin/flightsoffer',$flight->id)}}" method="get">
									<input type="hidden" name="lang" value="en" />
									<button type="submit" class="btn btn-danger p-3">Delete</button>
								</form>
								<form action="{{route('flightsoffers.edit',$flight,'edit')}}" method="get">
									<input type="hidden" name="lang" value="en" />
									<button type="submit" class="btn btn-warning p-3">Modify</button>
								</form>
							</td>
						</tr>
					@endforeach
				@else
					<h2>There Are No Flights Offers</h2>
				@endif
			</tbody>
		</table>
	</div>
</div>
@stop
@section('js')

$('.ar').on('click',function(){
	$('.ar').addClass('active');
	$('.en').removeClass('active');
	$('.ar-body').css('display','block');
	$('.en-body').css('display','none');
});

$('.en').on('click',function(){
	$('.en').addClass('active');
	$('.ar').removeClass('active');
	$('.en-body').css('display','block');
	$('.ar-body').css('display','none');
});

@stop