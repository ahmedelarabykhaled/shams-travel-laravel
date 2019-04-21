@extends('layouts.admin')
@section('style')
.card
{
	height: auto;
}
@stop
@section('content')
<div class="card m-5 p-5">
	<h2 class="text-center my-3">Do You Wante To Delete This Photo</h2>
	<form action="{{url('admin/photos',$photo->id)}}" method="post" class="d-inline m-auto">
		@csrf()
		@method('DELETE')
		<input type="hidden" name='lang' value="{{$lang}}" />
		<button class="btn btn-danger fa-lg p-4" type="submit">DELETE</button>
	</form>
	<div class="m-4">
		<img src="{{url('upload/photo album',$photo->url)}}" alt="image" class="w-100">
	</div>
</div>
@stop