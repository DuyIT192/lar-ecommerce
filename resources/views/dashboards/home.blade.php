<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('/')}}">
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="keyword" content="@yield('keyword')">
	<meta name="author" content="duyrnt">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="dashboard/img/favicon.ico">
	<!-- end: Favicon -->
	
	<!-- start: CSS -->
	@include('dashboards.generals.css')
	<!-- end: CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
</head>

<body>
	<!-- start: Header -->
	@include('dashboards.pages.header')
	<!--end : Header -->
	<!-- container-fluid-full -->
	<div class="container-fluid-full">
		<!-- row-fluid -->
		<div class="row-fluid">
		<!-- start: Main Menu -->
		@include('dashboards.pages.mainmenu')
		<!-- end: Main Menu -->
		<noscript>
			<div class="alert alert-block span10">
				<h4 class="alert-heading">Warning!</h4>
				<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
			</div>
		</noscript>
		<!-- start: Content -->
		<div id="content" class="span10">
			@yield('main_content')
		</div>
		<!-- end: Content -->
		</div>
		<!-- end : row-fluid -->
	</div>
	<!-- end : container-fluid-full -->
	<!-- modal	 -->
		<!-- // MODAL HERE !!! -->
	<!-- end : modal -->
	<div class="clearfix"></div>
	<!-- footer -->
	@include('dashboards.pages.footer')
	<!-- end : footer -->
	<!-- start: JavaScript-->
	@include('dashboards.generals.js')
	@yield('script')
	<!-- end: JavaScript-->
</body>
</html>
