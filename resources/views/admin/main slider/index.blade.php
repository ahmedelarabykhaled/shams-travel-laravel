@extends('layouts.admin')
@section('style')
td
{
	width: 25%;
}
.ar-body
{
	display: none;
}
@stop
@section('content')

<div class="card m-5 p-5">
	<h2 class="text-center py-4">Main Slider</h2>
	@if(session('messege'))
		<div class="alert alert-success">{{session('messege')}}</div>
	@endif
	<div>
		<a href="{{url('admin/mainslider/create')}}" class="btn btn-primary p-3 fa-lg">Add New Slider Slide</a>
	</div>

	<div class="text-center m-4">
		<button class="en btn btn-outline-primary active">English</button>
		<button class="ar btn btn-outline-success">عربى</button>
	</div>
	<div>
		<table class="table table-hover my-5">
			<thead>
				<th>Comment :</th>
				<th>Hint :</th>
				<th>Image :</th>
			</thead>
			<tbody class="ar-body">
				@foreach($slides as $slide)
				<tr>
					<td>{{$slide->comment}}</td>
					<td>{{$slide->hint}}</td>
					<td>
						<img src="{{url('upload/main slider',$slide->url)}}" alt="image" style="width: 300px;height: 300px;">
					</td>
					<td class="text-center">
						<form method="get" action="{{url('admin/mainslide',$slide->id)}}">
							<input type="hidden" name="lang" value="{{$slide->language}}" />
							<button type="submit" class="btn btn-danger px-4 py-3">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
				
			</tbody>
			<tbody class="en-body">
				
				@foreach($enslides as $slide)
				<tr>
					<td>{{$slide->comment}}</td>
					<td>{{$slide->hint}}</td>
					<td>
						<img src="{{url('upload/main slider',$slide->url)}}" alt="image" style="width: 300px;height: 300px;">
					</td>
					<td class="text-center">
						<form method="get" action="{{url('admin/mainslide',$slide->id)}}">
							<input type="hidden" name="lang" value="{{$slide->language}}" />
							<button type="submit" class="btn btn-danger px-4 py-3">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
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