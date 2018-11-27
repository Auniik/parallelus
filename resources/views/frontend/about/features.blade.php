@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Features')
@section('content')
<?php
	$config=App\AboutConfig::first();
?>
<div id="header" class="header-bg header-nav-bottom" style="background-image: url({{$config==null ? '/frontend/images/header-page.jpg' : $config->bg_image}})">
		<!-- page header -->
	<div class="header-bg-wrapper">
		<!-- content -->
		<div class="header-inner">
			<div class="top-header-inner">
				<div class="inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- Header Content -->
								{{-- <a href="#"><img src="{{asset('frontend/images/logo-black.png')}}" alt="FrontRunner" /></a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  <!-- end .header-inner -->
	</div>  <!-- end .header-bg-wrapper -->

	<!-- main navigation -->
	
	

	<div id="header" class="header-bg header-nav-bottom" style="background-image: url(assets/images/header-page.jpg)">

		<!-- page header -->
		<div class="header-bg-wrapper">
			<!-- content -->
			<div class="header-inner">
				<div class="top-header-inner">
					<div class="inner-content">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- Header Content -->
									<!-- <a href="#"><img src="assets/images/logo-black.png" alt="FrontRunner" /></a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>  <!-- end .header-inner -->
		</div>  <!-- end .header-bg-wrapper -->

		<!-- main navigation -->
		@include('layouts.frontend.navbar_top')
	</div> <!-- end header -->


	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">

			<div class="main-section col-md-8">
				<header class="page-header">
					<h1 class="page-title">{{$feature==null ? 'Feature Headline' : $feature->feature_header}}</h1>
				</header>

				<div class="entry-content">
					{!!$feature->feature_text!!}
				</div>

			</div>

			<div class="col-md-3 col-md-offset-1">
				<div class="sidebar-container">

					<aside class="widget">
						<h3 class="heading">INFORMATION</h3>
						<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
					</aside>

					<aside class="widget">
						<h3 class="heading">SUB MENU AREA</h3>
						<ol class="list-unstyled">
							<li><a href="#">March 2014</a></li>
							<li><a href="#">February 2014</a></li>
							<li><a href="#">January 2014</a></li>
							<li><a href="#">December 2013</a></li>
							<li><a href="#">November 2013</a></li>
							<li><a href="#">October 2013</a></li>
							<li><a href="#">September 2013</a></li>
							<li><a href="#">August 2013</a></li>
							<li><a href="#">July 2013</a></li>
							<li><a href="#">June 2013</a></li>
							<li><a href="#">May 2013</a></li>
							<li><a href="#">April 2013</a></li>
						</ol>
					</aside>

					<aside class="widget">
						 <h3 class="heading">ELSEWHERE</h3>
						<ol class="list-unstyled">
							<li><a href="#">GitHub</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
						</ol>
					</aside>

				</div>
			</div>

		</div> <!-- end row -->
	</div> <!-- end main-content -->



@endsection