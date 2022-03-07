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
	
	
 
<div>
    <img style="display:block;margin:0 auto;margin-top:200px"src={{url('assets/media/img/logo.png')}}><br>
    <h4 style="display:block;margin:0 auto;text-align:center">Laravel Test job Question Solution</h4>
</div>
<div class="container"><br><br>
    <div class="row">
        <div class="col-md-6  text-right">
         <a href="{{route('user.index')}}" class="btn btn-primary">Problem 1 solution</a>
        </div>
        <div class="col-md-6  text-left">
            <a href="{{route('product.index')}}" class="btn btn-primary">Problem 2 solution</a>
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