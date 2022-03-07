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
				<h2>Update Product</h2><br>
				
				@if(Session::has('message'))
				<p class="alert alert-success d-flex justify-content-between">{{Session::get('message')}}<button class="close" data-dismiss="alert">x</button></p>
               @endif
				
				<form action="{{url('product/'.$data->id)}}" method="POST">
					@csrf
                    @method('PUT')
					<div class="form-group">
						<label for="">Product Name</label>
						<input name="product_name" class="form-control" value="{{$data->product_name}}" type="text">
					</div>
					<div class="form-group">
						<label for="">Price</label>
						<input name="price" class="form-control" value="{{$data->price}}" type="integer">
					</div>
					<h4 class="btn btn-warning" id="button">Variants</h4>(if any)<br><br>
					<div id="variant" style="display:none">
						<div class="form-group">
							<label for="">Gender</label>(if any)
							<select class="form-control" name="gender">
								<option value=" ">--Select--</option>
								<option @if($data ->gender== 'Male') selected @endif value="Male">Male</option>
								<option @if($data ->gender== 'Female') selected @endif value="Female">Female</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Color</label>(if any)
							<select class="form-control" name="color">
								<option value=" ">--Select--</option>
								<option @if($data ->color== 'Black') selected @endif value="Black">Black</option>
								<option @if($data ->color== 'White') selected @endif value="White">White</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Size</label>(if any)
							<input name="size" class="form-control" value="{{$data ->size}}" type="text">
						</div>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="update">
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