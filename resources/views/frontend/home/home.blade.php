@extends('layouts.frontend')

@section('content')
<body class="home">
	<?php
		$config=App\Configuration::first();
		$about=App\About::first();
	?>
	<div id="header" class="header-bg header-large header-nav-top header-nav-toggle offset-bottom" style="background-image: url({{$config==null ? '/frontend/images/header-home.jpg' : $config->bg_image}})">
		
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
									<img src="{{asset('frontend/images/logo-border1.png')}}" width="500" height="76" class="logoBorder" alt="Tim Hawthorne for U.S. Congress">
								</div>
								<div class='designation'>{{$config==null ? 'YOUR DESIGNATION' : strtoupper($config->designation)}}</div>
							</div>
						</a>
					</div>
				</div>
			</div>

			<!-- main navigation (use <li class="active"> to indicate current page) -->
			<div class="header-inner menu-container">
				<div class="navbar-wrapper do-transition">
					<nav class="navbar navbar-default navbar-vertical" id="nav-main">
						<div class="container-fluid">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="index.html" class="navbar-brand"><img src="{{asset('frontend/images/logo-tim.png')}}" alt="Tim for US Congress"></a>
							</div>
			<!-- //NAVBAR -->
							<div class="collapse navbar-collapse" id="navbar-main">
								<ul class="nav navbar-nav" id="nav-left">
									<li class="active"><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('/issues')}}">Issues</a></li>
									<li class="dropdown show-on-hover">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">News</a>
										<ul class="dropdown-menu">
											<li><a href="{{url('/news-list')}}">News</a></li>
											<li><a href="{{('/videos')}}">Videos</a></li>
											<li><a href="{{('/events')}}">Events</a></li>
										</ul>
									</li>
									<li class="dropdown show-on-hover">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">About</a>
										<ul class="dropdown-menu">
											<li><a href="{{url('/about')}}">About {{$config==null ? 'Your Name here' : $config->profile_name}}</a></li>
											<li><a href="page-features.html">Features</a></li>
										</ul>
									</li>
									<li><a href="{{url('/contact')}}">Contact</a></li>
								</ul>
								<ul class="nav navbar-nav" id="nav-right">
									<li><a href="{{url('/donate')}}">Donate</a></li>
								</ul>
							</div>
						</div>
					</nav>  <!-- end default nav -->
				</div>  <!-- end navbar-wrapper -->
			</div>  <!-- end header-inner -->

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
						<a href="donate.html">
							<article>
								<h3 class="entry-title">
									<img src="{{asset('frontend/images/us-map.png')}}" width="65" height="40" alt="US Map" class="icon">
									<span>Contribute</span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 no-padding">
					<div class="header-links-item" style="background-image: url('{{asset('frontend/images/header-bottom-volunteer.jpg')}}')">
						<a href="volunteer.html">
							<article>
								<h3 class="entry-title">
									<i class="fa fa-check-square-o"></i>
									<span>Volunteer</span>
								</h3>
							</article>
							<div class="overlay"></div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-xs-6 no-padding">
					<div class="header-links-item" style="background-image: url('{{asset('frontend/images/header-bottom-updates.jpg')}}')">
						<a href="newsletter.html">
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
						<a href="blog.html">
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
					<blockquote class="big-quote" style="margin-top:0;">&ldquo;{{$config==null ? 'Enter Quote Message' : $config->quote_message}}.&rdquo;</blockquote>
					<p class="section-more text-center"><a href="{{url('/about')}}" class="btn btn-default">More About Tim</a></p>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end section-blockquote -->


	<!-- Campaign Video
	================================================== -->
	<div id="section-videos" class="wrapper video-list">

		<div class="container">

			<h2 class="heading">Campaign Videos</h2>

			<div class="row">
				<div class="col-md-12">

					<div class="video-wrapper">
						<div class="close-button">
							<i class="fa fa-times close-icon"></i>
						</div>
						<div id="player_container" class="video-container">

							<div class="video-element video-element-bhMMTaHpvKg">
								<div id="bhMMTaHpvKg" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->
							</div>
							<div class="video-element video-element-gZAYMWSBXCg">
								<div id="gZAYMWSBXCg" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->
							</div>
							<div class="video-element video-element-igZMahgu2_0">
								<div id="igZMahgu2_0" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->
							</div>
							<div class="video-element video-element-R7Nh7IBzJiw">
								<div id="R7Nh7IBzJiw" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="row">

				<div class="col-md-3 col-sm-6">
					<!-- Use YouTube Video ID for 'thumb-######' and data-video-index -->
					<div class="video-thumbnail" id="thumb-bhMMTaHpvKg" data-video-index="bhMMTaHpvKg" style="background-image: url('{{asset('frontend/images/video-thumbnail-1.jpg')}}');">
						<i class="fa fa-play-circle"></i>
						<div class="overlay"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="video-thumbnail" id="thumb-gZAYMWSBXCg" data-video-index="gZAYMWSBXCg" style="background-image: url('{{asset('frontend/images/video-thumbnail-2.jpg')}}');">
						<i class="fa fa-play-circle"></i>
						<div class="overlay"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="video-thumbnail" id="thumb-igZMahgu2_0" data-video-index="igZMahgu2_0" style="background-image: url('{{asset('frontend/images/video-thumbnail-3.jpg')}}');">
						<i class="fa fa-play-circle"></i>
						<div class="overlay"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="video-thumbnail" id="thumb-R7Nh7IBzJiw" data-video-index="R7Nh7IBzJiw" style="background-image: url('{{asset('frontend/images/video-thumbnail-4.jpg')}}');">
						<i class="fa fa-play-circle"></i>
						<div class="overlay"></div>
					</div>
				</div>

				<div class="col-sm-12">
					<p class="section-more"><a href="videos.html" class="btn btn-default">More Campaign Videos</a></p>
				</div>

			</div> <!-- end row -->
		</div> <!-- end container -->
	</div> <!-- end section-videos -->


	<!-- News
	================================================== -->
	<div id="section-news" class="wrapper">

		<div class="container">
<?php
	$data=App\News::limit(1)->get();
?>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h2 class="heading">News &amp; Headlines</h2>
				</div>
			</div>
			
			
			<div class="row">
				<div class="news-list col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					@foreach($data as $row)
					<article class="post">
						<header>
							{{-- <div class="header-meta">
								<span class="posted-on">August 21, 2015</span>
							</div> --}}
							<h2 class="entry-title">
								<a href="" title="article">{{$row->news_heading}}</a>
							</h2>
						</header>

						<p>
							{{$row->description}}
							<br>
							<a href="single.html" class="more-link">Continue reading</a>
						</p>

						<hr class="sep" />
					</article>
					@endforeach
					

					<p class="section-more"><a href="{{url('/news-list')}}" class="btn btn-default">More News</a></p>

				</div>  <!-- end column -->
			</div>  <!-- end row -->

		</div>  <!-- end container -->
	</div> <!-- end section-news -->


	<!-- Full Width Slider
	================================================== -->
	<div id="section-slider" class="featured-slider">
		<div class="featured-carousel">
			<div class="item">
				<div class="bg-img" style="background-image: url({{asset('frontend/images/full-width-bg-1.jpg')}})"></div>
				<div class="color-hue"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<article>
								<h3>
									<em>I'm <strong>serious</strong> about leadership. <br>
									You see this face? <br>
									<strong>This</strong> is my serious face.</em>
								</h3>
							</article>
						</div>
					</div>
				</div>
			</div>  <!-- end item -->
			<div class="item">
				<div class="bg-img" style="background-image: url({{asset('frontend/images/full-width-bg-2.jpg')}})"></div>
				<div class="color-hue"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<article>
								<h3>
									<em>Working to make a <br>better tomorrow... <br><strong>tomorrow</strong>.</em><br>
									<span style="font-size:.6em">Vote November 8th</span>
								</h3>
							</article>
						</div>
					</div>
				</div>
			</div>  <!-- end item -->
			<div class="item">
				<div class="bg-img" style="background-image: url({{asset('frontend/images/full-width-bg-3.jpg')}})"></div>
				<div class="color-hue"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<article>
								<h3>
									<em>Taking action <strong>together</strong> <br>
									for the children, <br>
									plus the <strong>economy</strong>.</em>
								</h3>
							</article>
						</div>
					</div>
				</div>
			</div>  <!-- end item -->
		</div>
	</div> <!-- end featured-slider -->


	<!-- Events
	================================================== -->
	<div id="section-events" class="wrapper">

		<div class="container">

			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<h2 class="heading">Campaign Events</h2>
				</div>  <!-- end column -->
			</div>  <!-- end row -->

			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

					<ul class="timeline">
						<li class="timeline-date">
							<div class="date">24</div>
							<div class="month">September</div>
						</li>
						<li class="timeline-inverted">
							<div class="circle"></div>
							<div class="tl-panel">
								<div class="tl-heading">Guest Appearance on "The View"</div>
								<div class="tl-body">
									<p>Appearing as a special guest for the popular talk show, along side other candidates.</p>
									<div class="time"><i class="fa fa-clock-o"></i> 8:30 AM - 9:00 AM</div>
									<div class="location"><i class="fa fa-map-marker"></i> 515 E. 51st St, New York NY</div>
								</div>

							</div>
							<div class="date-title">8:30 <span>AM</span></div>
						</li>
						<li class="timeline-standard">
							<div class="circle"></div>
							<div class="tl-panel">
								<div class="tl-heading">Lunch with Local Media Group</div>
								<div class="tl-body">
									<p>Taking questions from the media at Tiki Tacos before a public lunch event.</p>
									<div class="time"><i class="fa fa-clock-o"></i> 12:00 PM - 1:00 PM</div>
									<div class="location"><i class="fa fa-map-marker"></i> 26 Salsa Ave, New York NY</div>
								</div>

							</div>
							<div class="date-title">12:00 <span>PM</span></div>
						</li>
						<li class="timeline-date">
							<div class="date">5</div>
							<div class="month">October</div>
						</li>
						<li class="timeline-inverted">
							<div class="circle"></div>
							<div class="tl-panel">
								<div class="tl-heading">LSM Community Center Opening</div>
								<div class="tl-body">
									<p>Official dedication of the new community center for the "Legaly Sound of Mind" organization.</p>
									<div class="time"><i class="fa fa-clock-o"></i> 10:00 AM - 11:00 AM</div>
									<div class="location"><i class="fa fa-map-marker"></i> 123 Fruit Cake Rd, Austin TX</div>
								</div>

							</div>
							<div class="date-title">10:00 <span>AM</span></div>
						</li>
					</ul>

					<p class="section-more timeline-more"><a href="events.html" class="btn btn-default"><i class="fa fa-2x fa-plus visible-xs-inline visible-sm-inline"></i><span class="visible-md-inline visible-lg-inline">More Events</span></a></p>
				</div>  <!-- end column -->
			</div>  <!-- end row -->

		</div> <!-- end container -->
	</div>  <!-- end section-events -->


	<!-- Footer
	================================================== -->
	@include('layouts.footer')
</body>
@endsection