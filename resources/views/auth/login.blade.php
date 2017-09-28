
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="{{$adminUrl}}/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="{{$adminUrl}}/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="{{$adminUrl}}/css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="{{$adminUrl}}/css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="{{$adminUrl}}/js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
</head> 
<body>
	<!--/login-->
	
	<div class="error_page">
		<!--/login-top-->
		
		<div class="error-top">
			<h2 class="inner-tittle page">LOGIN</h2>
			<div class="login">
				<h3 class="inner-tittle t-inner">Login</h3>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<!-- <div class="buttons login">
					<ul>
						<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
						<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
						<div class="clearfix"></div>
					</ul>
				</div> -->
				<form action="{{ route('auth.auth.login') }}"  method="POST">
					{{csrf_field()}}
					<input type="text" name="username" class="text" placeholder="Username" >
					<input type="password" value="Password" name="password">
					<div class="submit"><input type="submit" placeholder="Password" value="Login" ></div>
					<div class="clearfix"></div>
					
					<div class="new">
						<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
						<p class="sign">Do not have an account ? <a href="">Sign Up</a></p>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>

			
		</div>
		
		
		<!--//login-top-->
	</div>
	
	<!--//login-->
	<!--footer section start-->
	<div class="footer">
		<div class="error-btn">
			<a class="read fourth" href="/">Return to Home</a>
		</div>
		<p>Quản lý tiền điện với Framework Laravel- ĐỒ ÁN TỐT NGHIỆP -byCode Thị Mỹ & Quang Hưng<a href="http://www.dct.udn.vn/" target="_blank"> || Trường Cao đẳng Công nghệ</a></p>
	</div>
	<!--footer section end-->
	<!--/404-->
	<!--js -->
	<script src="{{$adminUrl}}/js/jquery.nicescroll.js"></script>
	<script src="{{$adminUrl}}/js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{$adminUrl}}/js/bootstrap.min.js"></script>
</body>
</html>