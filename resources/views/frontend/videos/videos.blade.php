@extends('layouts.frontend')
@section('content')

<body class="videos">

	<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('frontend.top_navbar')
	</div> <!-- end header -->
<?php
$videos=App\Video::paginate(3);

?>

	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">

			<div class="main-section col-md-12">

				<header class="page-header">
					<h1 class="page-title">Videos</h1>
				</header>

				<div class="entry-content">

				
					<div class="video-list">

						<div class="row">
							
							<div class="col-md-12">
								
								<div class="video-wrapper">
									<div class="close-button">
										<i class="fa fa-times close-icon"></i>
									</div>
									<div id="player_container" class="video-container">
										@foreach($videos as $video)
										<!-- Start row -->
										<div class="video-element video-element-{{$video->video_url}}">
											<div id="{{$video->video_url}}" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->

										</div>
										@endforeach
									</div>
								</div>

							</div>
							
						</div>
				

						<div id="player_list" class="row">
							@foreach($videos as $video)
							<!-- Start Video Thumbnails -->
							<div class="col-md-4 col-sm-6">
								
								<!-- Use YouTube Video ID for 'thumb-######' and data-video-index -->
								<article class="video-entry">
									{{-- @php
									$thumbnail="http://img.youtube.com/vi/{{}}/0.jpg");
									@endphp --}}
									<div class="video-thumbnail" id="thumb-{{$video->video_url}}" data-video-index="{{$video->video_url}}" style="background-image: url(http://img.youtube.com/vi/{{$video->video_url}}/0.jpg);">
										<i class="fa fa-play-circle"></i>
										<div class="overlay"></div>
									</div>
									<h3 class="video-title">{{$video->video_title}}</h3>
									<p class="video-desc">
										{{$video->short_description}}
									</p>
								</article>

							</div>
							@endforeach
						</div> <!-- end row -->

					

						<!-- Paging -->
						<!-- <div class="paging clearfix">
							<ul class="pagination">
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li class="next-post"><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div> -->

						<!-- Ajax Load More -->
						
						<p class="text-center">

							{{$videos->links()}}
						</p>

					</div>

				</div>

			</div> <!-- end main-section -->
		</div> <!-- end container -->
	</div> <!-- end main-content -->


	<!-- Footer
	================================================== -->
	{{-- @include('layouts.frontendfooter') --}}
@endsection