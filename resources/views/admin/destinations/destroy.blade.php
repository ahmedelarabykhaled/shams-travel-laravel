@extends('layouts.admin')
@section('style')

.card
{
	height: auto;
}

@stop
@section('content')


<div class="card m-5 p-5">
	<div class="para">
		<h1 class="d-inline" style="color: red">Do You Want To Delete This Destination</h1>
		<form action="{{url('admin/destination',$dest->id)}}" method="post" class="d-inline float-right">
			@csrf()
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</div>
	<div class="my-5">
		<h2>Name :</h2>
		<h2>{{$dest->name}}</h2>
		<br/>
		<h2>Hint :</h2>
		<h2>{{$dest->hint}}</h2>
		<br/>
		<h2>Image :</h2>
		<img src="{{url('upload/destinations',$dest->url)}}" class="rounded" alt="image" style="width: 300px;height: 300px;">
	</div>
</div>


@stop