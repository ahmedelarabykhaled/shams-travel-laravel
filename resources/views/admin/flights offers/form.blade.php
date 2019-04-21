@extends('layouts.admin')
@section('style')

.card
{
	height : auto;
}

@stop
@section('content')


<div class="card m-5 p-5">
	<h2 class="text-center">Add New Flight Offer</h2>

	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div class="my-5">
		@if(isset($flight))
		<form action="{{url('admin/flightsoffers',$flight->id)}}" method="post" enctype="multipart/form-data">
			@csrf()
			@method('PUT')
		@else
		<form action="{{url('admin/flightsoffers')}}" method="post" enctype="multipart/form-data">
			@csrf()
		@endif
			<input type="hidden" name="lang" value="<?php if(isset($flight)){echo $flight->language;} ?>" id="lang"> 
			<p class="mt-3">country :</p>
			<input type="text" name="country" class="form-control" value="<?php if(isset($flight)){echo $flight->country;} ?>">
			
			<p class="mt-3">Place :</p>
			<input type="text" name="place" class="form-control" value="<?php if(isset($flight)){echo $flight->place;} ?>">
			
			<p class="mt-3">Duration :</p>
			<input type="text" name="duration" class="form-control" value="<?php if(isset($flight)){echo $flight->duration;} ?>">
			
			<p class="mt-3">Coast :</p>
			<input type="text" name="coast" class="form-control" value="<?php if(isset($flight)){echo $flight->coast;} ?>">
			
			@if(isset($flight))
				<img src="{{url('upload/flights offers',$flight->url)}}" alt="flight" class="my-2" style="width: 200px;">
			@endif
			<p class="mt-3">Image :</p>
			<input type="file" name="url" class="">

			<button type="submit" class="btn btn-success px-5 py-3 mt-4">ADD</button>
		</form>
	</div>
</div>

<script type="text/javascript" src="{{url('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript">
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
</script>

@stop
