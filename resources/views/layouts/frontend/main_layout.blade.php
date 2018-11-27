<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('frontend_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/imports.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}" media="screen">
	<script type="text/javascript">
		var ajax_url = 'videos-ajax.json';
	</script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Open+Sans" rel="stylesheet">

	{{-- Retrieving favicon from Configuration Model --}}
	<?php
		$config=App\Configuration::first();
	?>
	<link rel="icon" href="{{$config==null ? '/frontend/images/favicon.ico' : $config->favicon}}" sizes="32x32" />

	
</head>
<body>
	@yield('content')


	@include('layouts.frontend.footer')
	<script src="{{asset("frontend/js/jquery-1.11.3.min.js")}}"></script>
	<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("frontend/js/jquery.fitvids.js")}}"></script>
	<script src="{{asset("frontend/js/owl.carousel.min.js")}}"></script>
	<script src="{{asset("frontend/js/custom.js")}}"></script>

	<script src="https://www.youtube.com/iframe_api"></script>
</body>
</html>