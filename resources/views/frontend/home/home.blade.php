@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Home')
@section('content')
	<?php
		$config=App\Configuration::first();
		$about=App\About::first();
	?>
	<div id="header" class="header-bg header-large header-nav-top header-nav-toggle offset-bottom" style="background-image: url({{$config==null ? 'frontend/images/header-home.jpg' : $config->bg_image}})">
		
		<!-- page header -->
		<div class="header-bg-wrapper">

			<!-- logo -->
			<div class="header-inner logo-container">
				<div class="pull-left">
					<div class="logo">
						<a href="{{url('/')}}" style="text-decoration: none">
							<div class="logo-wrapper">
								
								<div class="profileName">{{$config==null ? 'YOUR NAME' : $config->profile_name}}</div>
								<div class="logo-inner-wrapper">
									<img src="{{asset('frontend/images/logo-border1.png')}}" width="500" height="76" class="logoBorder" alt="">
								</div>
								<div class='designation'>{{$config==null ? 'YOUR DESIGNATION' : strtoupper($config->designation)}}</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<!-- main navigation (use <li class="active"> to indicate current page) -->
			@include('layouts.frontend.navbar_aside')

		</div>  <!-- end header-bg-wrapper -->
	</div>  <!-- / .header-bg -->


	<!-- Header Bottom Links
	================================================== -->
	<div class="header-links">
		<div class="container">
			<div class="header-links-wrapper">
				<div class="col-md-3 col-xs-6 no-padding">
					<!-- Modify style with color classes: 'accent', 'solid-accent', 'solid-primary' (default: no extra class) -->
					<div class="header-links-item solid-accent" style="background-image: none;">
						<a href="#">
							<article>
								<h3 class="entry-title">
									<img src="{{asset('frontend/images/us-map.png')}}" width="65" height="40" alt="US Map" class="icon">
									<span></span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 no-padding">
					<div class="header-links-item" style="background-image: url('{{asset('frontend/images/header-bottom-volunteer.jpg')}}')">
						<a href="{{url('/issues')}}">
							<article>
								<h3 class="entry-title">
									<i class="fa fa-check-square-o"></i>
									<span>Issues</span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 no-padding">
					<div class="header-links-item" style="background-image: url('{{asset('frontend/images/header-bottom-updates.jpg')}}')">
						<a href="{{url('/newsletter')}}">
							<article>
								<h3 class="entry-title">
									<i class="fa fa-envelope"></i>
									<span>Email Updates</span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 no-padding">
					<div class="header-links-item" style="background-image: url('{{asset('frontend/images/header-bottom-news.jpg')}}')">
						<a href="{{url('/news')}}">
							<article>
								<h3 class="entry-title">
									<i class="fa fa-newspaper-o"></i>
									<span>Latest News</span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
			</div> <!-- end header-links-wrapper -->
		</div> <!-- end container -->
	</div> <!-- end header-links -->


	<!-- Blockquote at Top
	================================================== -->
	<div id="section-top-content" class="wrapper header-links-overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<blockquote class="big-quote" style="margin-top:0;">&ldquo;{{$config==null ? 'Enter Quote Message' : $config->quote_message}}&rdquo;</blockquote>
					<p class="section-more text-center"><a href="{{url('/about')}}" class="btn btn-default">More About {{$config==null ? '*YOUR NAME*' : $config->profile_name}}</a></p>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end section-blockquote -->


	<!-- Campaign Video
	================================================== -->
	@include('frontend.home.videos')


	<!-- News
	================================================== -->
	@include('frontend.home.news')
	 <!-- end section-news -->

	<!-- Full Width Slider
	================================================== -->
	@include('frontend.home.slider')
	 <!-- end featured-slider -->


	<!-- Events
	================================================== -->
	@include('frontend.home.events')
	  <!-- end section-events -->

@endsection