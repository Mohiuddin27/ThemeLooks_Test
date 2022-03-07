<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
</head>
<body>
	
	

	<div class="wrap shadow">
		<a href="{{route('user.index')}}" class="btn btn-primary">View All Registered Users</a><br><br>
		<div class="card">
			
			<div class="card-body">
				<h2>User Registration Form</h2><br>
				@if($errors -> any())
				<p class="alert alert-danger d-flex justify-content-between">{{$errors->first()}}<button class="close" data-dismiss="alert">x</button></p>
				@endif
				@if(Session::has('message'))
				<p class="alert alert-success d-flex justify-content-between">{{Session::get('message')}}<button class="close" data-dismiss="alert">x</button></p>
               @endif
				
				<form action="{{route('user.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" value="{{old('username')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="{{old('username')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" name="password" type="password">
					</div>
					<div class="form-group">
						<label for="">Date of Birth</label>
						<input class="form-control" name="dob" value="{{old('dob')}}" type="date">
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input class="form-control" name="city" value="{{old('city')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Country</label>
						<input class="form-control" name="country" value="{{old('country')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Status</label><br>
						<input name="status" class=""  type="radio" value="Active" id="Active">
						<label for="Active">Active</label>
						<input name="status" class=""  type="radio" value="Inactive" id="Inactive">
						<label for="Inactive">Inactive</label>
					</div><br>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="{{url('assets/js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{url('assets/js/popper.min.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/custom.js')}}"></script>
</body>
</html>