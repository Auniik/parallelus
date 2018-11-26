<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Political HTML Template - FrontRunner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/imports.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}" media="screen">
	<script type="text/javascript">
		var ajax_url = 'videos-ajax.json';
	</script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans" rel="stylesheet">
	<?php
		$config=App\Configuration::first();
	?>
	<link rel="icon" href="{{$config==null ? '/frontend/images/favicon.ico' : $config->favicon}}" sizes="32x32" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="{{asset("frontend/js/jquery-1.11.3.min.js")}}"></script>
	<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("frontend/js/jquery.fitvids.js")}}"></script>
	<script src="{{asset("frontend/js/owl.carousel.min.js")}}"></script>
	<script src="{{asset("frontend/js/custom.js")}}"></script>

	
	<script src="https://www.youtube.com/iframe_api"></script>
</head>

@yield('content')




</html>