@extends('layouts.frontend')

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
		<div class="header-inner menu-container">
			<div class="navbar-wrapper">
				<nav class="navbar navbar-default navbar-static-top navbar-sticky" id="nav-main">
					<div class="container-fluid">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('frontend/images/logo-tim.png')}}" alt="{{$config->profile_name}}"></a>
						</div>

						<div class="collapse navbar-collapse" id="navbar-main">
							<ul class="nav navbar-nav" id="nav-left">
								
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="issues.html">Issues</a></li>
								<li class="dropdown show-on-hover">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">News</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">News</a></li>
										<li><a href="videos.html">Videos</a></li>
										<li><a href="events.html">Events</a></li>
									</ul>
								</li>
								<li class="dropdown show-on-hover">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">About</a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/about')}}">About {{$config->profile_name}}</a></li>
										<li><a href="page-features.html">Features</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav" id="nav-right">
								<li><a href="donate.html">Donate</a></li>
							</ul>
						</div>

					</div>
				</nav>  <!-- end default nav -->
			</div>  <!-- end navbar-wrapper -->
		</div>  <!-- end header-inner -->
	</div> <!-- end header -->


	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">
		
			<div class="main-section col-md-8">
				<header class="page-header">
					<h1 class="page-title">{{$about->about_heading}}</h1>
				</header>

				<div class="entry-content">

					{!! $about->about_text !!}

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


	<!-- Footer
	================================================== -->
@include('layouts.footer')
@endsection