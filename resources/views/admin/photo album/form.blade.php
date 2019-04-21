@extends('layouts.admin')
@section('style')
.card
{
	height : auto;
}
@stop
@section('content')
<div class="card m-5 p-5">
	<h2 class="text-center">Add New Photo</h2>
	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div class="mt-5">
		@if(isset($photo))
		<form action="{{url('admin/photos',$photo->id)}}" method="post" enctype="multipart/form-data">
			@csrf()
			@method('PUT')
		@else
		<form action="{{url('admin/photos')}}" method="post" enctype="multipart/form-data">
			@csrf()
		@endif
			<input type="hidden" name="lang" value="<?php if(isset($photo)){echo $photo->language;} ?>" id="lang">
			<h2>Place :</h2>
			<input type="text" name="place" class="form-control mb-4" value="<?php if(isset($photo)){echo $photo->place;} ?>">

			<h2>Hint :</h2>
			<input type="text" name="hint" class="form-control mb-4" value="<?php if(isset($photo)){echo $photo->hint;} ?>">

			@if(isset($photo))
				<img src="{{url('upload/photo album',$photo->url)}}" alt="photo to ubdate" style="width: 80px;" class="mb-3">
			@endif
			<h2>Photo :</h2>
			<input type="file" name="url" class="form-control mb-4" value="">

			<button class="btn btn-success px-5 py-3">ADD PHOTO</button>
		</form>
	</div>
</div>
@stop
@section('js')

$('.ar').on('click',function(){
	$('.ar').addClass('active');
	$('.en').removeClass('active');
	$('#lang').attr('value','ar');
});

$('.en').on('click',function(){
	$('.en').addClass('active');
	$('.ar').removeClass('active');
	$('#lang').attr('value','en');
});

@stop