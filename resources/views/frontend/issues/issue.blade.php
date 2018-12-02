@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Issue')
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
					<h1 class="page-title">{{$data->issue_heading}}</h1>
				</header>

				<div class="entry-content">

					<p class="entry-thumbnail">
						<img width="761" height="400" src="{{url($data->issue_image)}}" alt="featured image">
					</p>

					{!!$data->issue_description!!}

				</div>

			</div>
		</div> <!-- end row -->
	</div> <!-- end main-content -->
@endsection