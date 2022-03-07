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
	<style>
		/* The switch - the box around the slider */
	.switch {
	  position: relative;
	  display: inline-block;
	  width: 60px;
	  height: 34px;
	}
	
	/* Hide default HTML checkbox */
	.switch input {
	  opacity: 0;
	  width: 0;
	  height: 0;
	}
	
	/* The slider */
	.slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #ccc;
	  -webkit-transition: .4s;
	  transition: .4s;
	}
	
	.slider:before {
	  position: absolute;
	  content: "";
	  height: 26px;
	  width: 26px;
	  left: 4px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
	}
	
	input:checked + .slider {
	  background-color: #2196F3;
	}
	
	input:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}
	
	input:checked + .slider:before {
	  -webkit-transform: translateX(26px);
	  -ms-transform: translateX(26px);
	  transform: translateX(26px);
	}
	
	/* Rounded sliders */
	.slider.round {
	  border-radius: 34px;
	}
	
	.slider.round:before {
	  border-radius: 50%;
	}
	</style>
</head>
<body>
	
	
  <a href="{{route('user.create')}}" style="margin-left:140px; margin-top:40px" class="btn btn-warning">User Registration Form</a>
 	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Users Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Email</th>
							<th>Date of Birth</th>
							<th>City</th>
							<th>Country</th>
							<th>Status</th>
							<th >Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $data)
						<tr>
							<td>{{$loop->index+1}}</td>
							<td>{{$data->username}}</td>
							<td>{{$data->email}}</td>
							<td>{{$data->dob}}</td>
							<td>{{$data->city}}</td>
							<td>{{$data->country}}</td>
							<td>
								<label class="switch">
									<input type="checkbox" @if($data->status== 'Active')  checked @endif>
									<span class="slider round"></span>
								</label>
							</td>
							
							<td class="d-flex text-left">
								
								<a class="btn  btn-warning" href="{{url('user/'.$data->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<span>
									<form action="{{url('user/'.$data->id)}}" method="POST">
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