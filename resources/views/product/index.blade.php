<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
</head>
<body>
	
	
  <a href="{{route('product.create')}}" style="margin-left:140px; margin-top:40px" class="btn btn-warning">Product Adding Form</a>
 	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Product's Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Gender</th>
							<th>Color</th>
							<th>Size</th>
							<th >Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $data)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$data->product_name}}</td>
							<td>{{$data->price}}</td>
							<td>{{$data->gender}}</td>
							<td>{{$data->color}}</td>
							<td>{{$data->size}}</td>
							
							
							<td class="d-flex text-left">
								
								<a class="btn  btn-warning" href="{{url('product/'.$data->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<span>
									<form action="{{url('product/'.$data->id)}}" method="POST">
									 @csrf
									 @method('DELETE')
									<button onclick="return confirm('Are you sure to delete?')" type="submit" style="padding:10px 10px" class="ml-1 btn btn-sm btn-danger btn-button"><i class="fa fa-trash" aria-hidden="true"></i>
									</button>
								</form>
							</span>
							</td>
						</tr>
						@endforeach

					</tbody>
				</table>
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