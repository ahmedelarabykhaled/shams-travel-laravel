@extends('layouts.admin')
@section('style')

h3
{
	color: rgba(0,0,0,0.5);
}

@stop
@section('content')

<div class="card m-5 p-5">
	<div class="text-center">
		<h2 class="" style="color: red">Do You Wante To Delete This Flight Offer</h2>
		<form action="{{url('admin/mainslider',$slide->id)}}" method="post" class="mt-4 d-inline ">
			@csrf()
			@method('DELETE')
			<input type="hidden" name="lang" value="{{$lang}}" />
			<button type="submit" class="btn btn-danger p-3">DELETE</button>
		</form>
	</div>
	<div class="my-5">
		<h3 class="d-inline">Comment :</h3>
		<h2 class="d-inline">{{$slide->comment}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">Hint :</h3>
		<h2 class="d-inline">{{$slide->hint}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">duration :</h3>
		<h2 class="d-inline">{{$slide->duration}}</h2>
		<br/>
		<br/>
		<h3 class="d-inline">image :</h3>
		<img src="{{url('upload/main slider',$slide->url)}}" style="width: 200px;height: 200px;">
		<br/>
	</div>
</div>

@stop