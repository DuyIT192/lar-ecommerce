<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('/')}}">
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="dashboard/css/bootstrap.min.css" rel="stylesheet">
	<link href="dashboard/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="dashboard/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="dashboard/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="dashboard/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="dashboard/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="dashboard/img/favicon.ico">
	<!-- end: Favicon -->
	<style type="text/css">
		body { background: url(dashboard/img/bg-login.jpg) !important; }
	</style>
		
</head>

<body>
	<div class="container-fluid-full">
	<div class="row-fluid">			
	<div class="row-fluid">
		<div class="login-box">
			<div class="icons">
				<a href="#"><i class="halflings-icon home"></i></a>
				<a href="#"><i class="halflings-icon cog"></i></a>
			</div>
			<h2>Đăng nhập hệ thống của SHWPRPO</h2>
			@include('dashboards.generals.error')
			<form class="form-horizontal" action="{{route('admin.users.getLogin')}}" method="POST">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<div class="input-prepend" title="Username">
						<span class="add-on"><i class="halflings-icon user"></i></span>
						<input class="input-large span10" name="name" id="username" type="text" placeholder="tên đăng nhập"/ required="">
					</div>
					<div class="clearfix"></div>

					<div class="input-prepend" title="Password">
						<span class="add-on"><i class="halflings-icon lock"></i></span>
						<input class="input-large span10" name="password" id="password" type="password" placeholder="mật khẩu"/ required="">
					</div>
					<div class="clearfix"></div>
					
					<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

					<div class="button-login">	
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</div>
					<div class="clearfix"></div>
				</fieldset>
			</form>
			<hr>
			<h3>Forgot Password?</h3>
			<p>
				No problem, <a href="#">click here</a> to get a new password.
			</p>	
		</div><!--/span-->
	</div><!--/row-->
	<!-- start: JavaScript-->
	@include('dashboards.generals.js')
	<!-- end: JavaScript-->
</body>
</html>
