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
		<a href="{{route('product.index')}}" class="btn btn-primary">View All Product's</a><br><br>
		<div class="card">
			
			<div class="card-body">
				<h2>Product Adding Form</h2><br>
				@if($errors -> any())
				<p class="alert alert-danger d-flex justify-content-between">{{$errors->first()}}<button class="close" data-dismiss="alert">x</button></p>
				@endif
				@if(Session::has('message'))
				<p class="alert alert-success d-flex justify-content-between">{{Session::get('message')}}<button class="close" data-dismiss="alert">x</button></p>
               @endif
				
				<form action="{{route('product.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Product Name</label>
						<input name="product_name" class="form-control" value="{{old('product_name')}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Price</label>
						<input name="price" class="form-control" value="{{old('price')}}" type="integer">
					</div>
					<h4 class="btn btn-warning" id="button">Variants</h4>(if any)<br><br>
					<div id="variant" style="display:none">
						<div class="form-group">
							<label for="">Gender</label>(if any)
							<select class="form-control" name="gender">
								<option value=" ">--Select--</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Color</label>(if any)
							<select class="form-control" name="color">
								<option value=" ">--Select--</option>
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Size</label>(if any)
							<input name="size" class="form-control" value="{{old('price')}}" type="text">
						</div>
					</div>
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
	<script>
       $('#button').click(function(){
           $('#variant').toggle();
	   });
	</script>
</body>
</html>