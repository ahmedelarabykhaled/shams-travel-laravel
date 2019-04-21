@extends('layouts.admin')
@section('style')

.card
{
	height: auto;
}

@stop
@section('content')

<div class="card m-5 p-5">
	<div class="text-center">
		<h1>Add Destination</h1>
	</div>

@if(!isset($dest))
	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
@endif
	<div>
		@if(!isset($dest))
		<form action="{{url('admin/destination')}}" method="post" enctype="multipart/form-data">
			@csrf()
		@else
		<form action="{{url('admin/destination',$dest->id)}}" method="post" enctype="multipart/form-data">
			@csrf()
			@method('PUT')
		@endif
			<input type="hidden" name="lang" value="en" id="" class="lan">
			<p class="mt-4">Country Name :</p>
			<input type="text" name="name" class="form-control" value="<?php if(isset($dest)){echo $dest->name;} ?>">

			<p class="mt-4">Hint :</p>
			<input type="text" name="hint" class="form-control" value="<?php if(isset($dest)){echo $dest->hint;} ?>">

			@if(isset($dest))
				<img src="{{url('upload/destinations',$dest->url)}}" alt="image" style="width: 100px;">
			@endif
			<p class="mt-4">Image :</p>
			<input type="file" name="url" class="form-control">

			<button class="btn btn-success my-4 px-5" type="submit">ADD</button>
		</form>
	</div>
</div>


<script type="text/javascript" src="{{url('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript">
		// $('.lan').attr('value','ar');
	$('.en').on('click',function(){
		$('.en').addClass('active');
		$('.ar').removeClass('active');
		$('.lan').attr('value','en');
	});
	$('.ar').on('click',function(){
		$('.ar').addClass('active');
		$('.en').removeClass('active');
		$('.lan').attr('value','ar');
	});


</script>

@stop
