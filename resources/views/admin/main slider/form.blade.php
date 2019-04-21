@extends('layouts.admin')
@section('style')
input
{
	margin-bottom: 20px;
}
@stop
@section('content')
<div class="card m-5 p-5">
	<h2 class="text-center">Add New Slider Slide</h2>
	<div>
		<div class="m-4 text-center" >
			<button class="en btn btn-outline-primary active">English</button>
			<button class="ar btn btn-outline-success">عربى</button>
		</div>
		<form action="{{url('admin/mainslider')}}" method="post" enctype="multipart/form-data">
			@csrf()
			<input type="hidden" name="lang" id="lang" value="en">
			<h2 class="mt-3">Comment : </h2>
			<input type="text" name="comment" class="form-control">
			<h2 class="mt-3">Hint : </h2>
			<input type="text" name="hint" class="form-control">
			<h2 class="mt-3">Image : </h2>
			<input type="file" name="image">
			<button type="submit" class="btn btn-success px-5 py-3 mt-4">Add</button>
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