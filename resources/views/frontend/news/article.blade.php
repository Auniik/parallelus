@extends('layouts.frontend.main_layout')
@section('frontend_title', 'News || Article')
@section('content')
<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('layouts.frontend.navbar_static')
	</div> <!-- end header -->


	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">

			<div class="main-section col-md-8 col-md-offset-2">
				<header class="page-header">
					<h1 class="page-title">{{$data->news_heading}}</h1>
				</header>

				<div class="entry-content">

					<!-- <p class="entry-thumbnail">
						<img width="761" height="400" src="assets/images/content-post-6.jpg" alt="featured image">
					</p> -->

					{!!$data->description!!}

				</div>

			</div>
		</div> <!-- end row -->
	</div> <!-- end main-content -->
@endsection