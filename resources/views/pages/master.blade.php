<!DOCTYPE html>
<html>
	<head>
        @yield('css')
        <base href="{{asset('/')}}">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keyword" content="@yield('keyword')">
        <meta name="content" content="@yield('content')">
		<link href="pages/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="http://1049.beha.vn/wp-content/themes/beha_vn/fonts/font-awesome.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#menu-icon").click(function(){
					$("#menubar").slideToggle("slow");
				});
			});
		</script>
	</head>
	<body>
        @yield('contents')
	</body>
</html>