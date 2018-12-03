@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Features')
@section('content')
<?php
	$config=App\BackgroundConfig::first();
?>
<div id="header" class="header-bg header-nav-bottom" style="background-image: url({{$config==null ? 'frontend/images/header-page.jpg' : $config->bg_image}})">
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
					{!!$feature==null ? '*Feature Text*' : $feature->feature_text!!}
				</div>

			</div>

		</div> <!-- end row -->
	</div> <!-- end main-content -->



@endsection