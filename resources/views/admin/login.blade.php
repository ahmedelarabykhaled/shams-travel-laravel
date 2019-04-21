<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<style type="text/css">
		body,html
		{
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background-image: url('{{url('assets/img/logo.png')}}');
			background-repeat: no-repeat;
			background-size: 30%;
			background-position: 100% 0px ;
			font-family: 'Oswald', sans-serif;
		}
		form
		{
			background-color: #fe2;
			width: 25%;
			min-width: 300px !important;
			box-shadow: 5px 5px 5px #999;
		}
		h2
		{
			text-align: center;
		}
	</style>
</head>
<body>
	@if($errors)
		@foreach($errors->all as $error)
			<h1>{{$error}}</h1>
		@endforeach
	@endif
	<form class="p-3 rounded" method="post" action="{{url('login')}}">
		@csrf()
		<h2 class="p-4">Welcome Admin</h2>
		<div>
			<label>Email :</label>
			<input type="text" name="email" class="form-control">
			
			<label>Password :</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="text-center my-3">
			<button type="submit" class="btn" style="background-color: #000;color: #fff;">Login</button>
		</div>
	</form>
</body>
</html>