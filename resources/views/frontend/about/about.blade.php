@extends('layouts.frontend.main_layout')
@section('frontend_title', 'About')
@section('content')
<div id="header" class="header-bg header-nav-bottom" style="background-image: url({{asset('frontend/images/header-page.jpg')}})">
		<?php
			$about=App\About::first();
			$config=App\Configuration::first();
		?>
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
					<h1 class="page-title">{{$about==null ? 'About *Your Name*' : $about->about_heading}}</h1>
				</header>

				<div class="entry-content">

					{!! $about==null ? 'Enter about yourself' : $about->about_text !!}

				</div>

			</div>

			<div class="col-md-3 col-md-offset-1">
				<div class="sidebar-container">

					<aside class="widget">
						<h3 class="heading">WE NEED YOUR VOTE!</h3>

						<h5><em>Mark your calendar and don't forget to show your support.</em></h5>

						<p><img src="{{asset('frontend/images/content-vote-date.png')}}" width="263" height="218" alt="Save the Date!"></p>
						<p class="small">We're getting closer every day so be sure to save the date. If you need help finding your voting location, check the directory of <a href="#">precinct polling places</a> or contact your local Board of Elections for details.</p>
					</aside>

					<aside class="widget">
						<h3 class="heading">VOTER RESOURCES</h3>

						<h5><em>Can I vote?</em></h5>
						<ul>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Check your voter registration.</a></li>
						</ul>

						<h5><em>Where do I go to vote?</em></h5>
						<ul>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Find your polling place.</a></li>
						</ul>

						<h5><em>Can I vote early?</em></h5>
						<ul>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Early voting and absentee ballots.</a></li>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Absentee voting requirements.</a></li>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Military and overseas voting.</a></li>
						</ul>

						<h5><em>I want to help!</em></h5>
						<ul>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Become a poll worker.</a></li>
							<li class="small"><a href="#"><i class="fa fa-chevron-right"></i> Volunteer to hellp the campaign.</a></li>
							<li class="small"><a href="#"><strong><i class="fa fa-chevron-right"></i> Make a donation!</strong></a></li>
						</ul>
					</aside>

					<aside class="widget">
						<h3 class="heading">JOIN US</h3>

						<h5><em>Help us to build a better tomorrow.</em></h5>

						<p><img src="{{asset('frontend/images/content-volunteer.jpg')}}" width="210" height="290" alt="Become a volunteer"></p>
						<p class="small">The road to a victory is long. We need the help of volunteers like you.</p>
						<p class="small"><a href="#"><i class="fa fa-chevron-right"></i> Start volunteering.</a></p>
					</aside>

				</div>
			</div>

		</div> <!-- end row -->
	</div> <!-- end main-content -->
@endsection