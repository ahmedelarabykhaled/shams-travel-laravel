@extends('layouts.admin')
@section('style')
.card
{
	height: auto;
}
.holder
{
	padding: 0px;
}
.upper
{
	background-color: rgba(255,255,255,0.3);
	padding: 20px;
	display: none!important;
}
.holder:hover .upper
{
	display: flex!important;
}
.ar-body
{
	display: none;
}
@stop
@section('content')
<div class="card m-5 p-5">
	<h2 class="text-center">The Photo Album</h2>
	<div>
		<a href="{{url('admin/photos/create')}}" class="btn btn-primary fa-lg p-3">Add New Photo</a>
	</div>
	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div class="container-fluid my-5">
		<div class="row en-body">
			@foreach($enphotos as $photo)
				<div class="col-ld-3 col-md-4 col-sm-6 holder" style="position: relative;">
					<img src="{{url('upload/photo album',$photo->url)}}" alt="image" class="w-100 h-100">
					<div class="w-100 h-100 upper" style="position: absolute;top: 0px;height: 100%;display: flex;justify-content: center;align-items: center">
						<div class="text-center fa-lg" style="color: #000;font-weight: 600;">
							<h3 class="fa-lg py-2">{{$photo->place}}</h3>
							<h3 class="fa-lg py-2">{{$photo->hint}}</h3>
							<form method="get" action="{{url('admin/photo')}}">
								<input type="hidden" value="{{$photo->id}}" name="id" />
								<input type="hidden" value="en" name="lang" />
								<button type="submit" class="btn btn-danger fa-lg">delete</button>
							</form>
							<form method="get" action="{{route('photos.edit',$photo->id)}}">
								<input type="hidden" value="{{$photo->id}}" name="id" />
								<input type="hidden" value="en" name="lang" />
								<button type="submit" class="btn btn-warning fa-lg">Update</button>
							</form>
							
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row ar-body">
			@foreach($photos as $photo)
				<div class="col-ld-3 col-md-4 col-sm-6 holder" style="position: relative;">
					<img src="{{url('upload/photo album',$photo->url)}}" alt="image" class="w-100 h-100">
					<div class="w-100 h-100 upper" style="position: absolute;top: 0px;height: 100%;display: flex;justify-content: center;align-items: center">
						<div class="text-center fa-lg" style="color: #000;font-weight: 600;">
							<h3>{{$photo->place}}</h3>
							<h3>{{$photo->hint}}</h3>
							<form method="get" action="{{url('admin/photo')}}">
								<input type="hidden" value="{{$photo->id}}" name="id" />
								<input type="hidden" value="ar" name="lang" />
								<button type="submit" class="btn btn-danger fa-lg">delete</button>
							</form>
							<!-- <a href="{{url('admin/photo',$photo->id)}}" class="btn btn-danger fa-lg" style="width: 100px">Delete</a> -->
						</div>
					</div>
				</div>
			@endforeach
		</div>
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