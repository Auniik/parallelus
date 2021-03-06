@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Videos')
@section('content')

<div class="videos">

	<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('layouts.frontend.navbar_static')
	</div> <!-- end header -->


	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">

			<div class="main-section col-md-12">

				<header class="page-header">
					<h1 class="page-title">Videos</h1>
					<hr/>
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
										@foreach($data as $row)
										<!-- Start row -->
										<div class="video-element video-element-{{$row->video_url}}">
											<div id="{{$row->video_url}}" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->

										</div>
										@endforeach
									</div>
								</div>

							</div>
							
						</div>
				

						<div id="player_list" class="row">
							@foreach($data as $row)
							<!-- Start Video Thumbnails -->
							<div class="col-md-4 col-sm-6">
								
								<!-- Use YouTube Video ID for 'thumb-######' and data-video-index -->
								<article class="video-entry">
									{{-- @php
									$thumbnail="http://img.youtube.com/vi/{{}}/0.jpg");
									@endphp --}}
									<div class="video-thumbnail" id="thumb-{{$row->video_url}}" data-video-index="{{$row->video_url}}" style="background-image: url(http://img.youtube.com/vi/{{$row->video_url}}/0.jpg);">
										<i class="fa fa-play-circle"></i>
										<div class="overlay"></div>
									</div>
									<h3 class="video-title">{{$row->video_title}}</h3>
									<p class="video-desc">
										{{$row->short_description}}
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
						
						<!-- Pagination -->
						<div class="paging clearfix">
							<ul class="pagination">
								{{$data->links()}}
							</ul>
						</div>

					</div>

				</div>

			</div> <!-- end main-section -->
		</div> <!-- end container -->
	</div> <!-- end main-content -->
</div>
@endsection