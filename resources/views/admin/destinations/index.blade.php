@extends('layouts.admin')
@section('style')

.card
{
	height: auto;
}
td
{
	min-width: 25%;
}
.ar-body
{
	display: none;
}

@stop
@section('content')


<div class="card m-5 p-5">
	<div class="para my-5">
		<h1 class="text-center">Destinations</h1>
	</div>
	<div>
		<a href="{{url('admin/destination/create')}}" class="btn btn-primary fa-lg p-3">Add New Destination</a>
	</div>
	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div>
		@if(sizeof($destinations) > 0)
		<table class="table table-hover my-5">
			<thead>
				<th>Name :</th>
				<th>Hint :</th>
				<th>Image :</th>
			</thead>
			<tbody class="ar-body">
				@foreach($destinations as $dest)
					<tr>
						<td>{{$dest->name}}</td>
						<td>{{$dest->hint}}</td>
						<td>
							<img src="{{url('upload/destinations',$dest->url)}}" alt="image" style="width: 200px;height: 200px;">
						</td>
						<td>
							<form method="get" action="{{url('admin/destinations',$dest->id)}}">
								<input type="hidden" name="lang" value="{{$dest->language}}" />
								<button class="btn btn-danger p-3 my-3" type="submit">Delete</button>
							</form>
							<form method="get" action="{{route('destination.edit',$dest->id,'edit')}}">
								<input type="hidden" name="lang" value="{{$dest->language}}" />
								<button class="btn btn-warning p-3 my-3" type="submit">Modify</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
			<tbody class="en-body">
				@foreach($endestinations as $dest)
					<tr>
						<td>{{$dest->name}}</td>
						<td>{{$dest->hint}}</td>
						<td>
							<img src="{{url('upload/destinations',$dest->url)}}" alt="image" style="width: 200px;height: 200px;">
						</td>
						<td>
							<form method="get" action="{{url('admin/destinations',$dest->id)}}">
								<input type="hidden" name="lang" value="{{$dest->language}}" />
								<button class="btn btn-danger my-3 p-3" type="submit">Delete</button>
							</form>
							<form method="get" action="{{route('destination.edit',$dest->id,'edit')}}">
								<input type="hidden" name="lang" value="{{$dest->language}}" />
								<button class="btn btn-warning p-3 my-3" type="submit">Modify</button>
							</form>
					</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<h2>There Are No Destinations</h2>
		@endif
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