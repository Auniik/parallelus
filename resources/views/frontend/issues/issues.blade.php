@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Issues')
@section('content')
<?php
	$config=App\BackgroundConfig::first();
?>
<div id="header" class="header-bg header-nav-bottom" style="background-image: url({{$config==null ? 'frontend/images/header-page-2.jpg' : $config->bg_image}})">

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
									<header class="page-header intro-wrap">
										<h1 class="page-title">{{$config==null ? 'On The Issues' : $config->page_heading}}</h1>
									</header>
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

			<div class="main-section col-md-8 col-md-offset-2">

				<!-- <header class="page-header">
					<h1 class="page-title">On The Issues</h1>
				</header> -->
				@foreach($data as $row)
				<article class="issue">
					<header>
						<h2 class="entry-title">
							<a href="{{url('issue/'.$row->id)}}" title="article">{{$row==null ? 'Issue headings here' : $row->issue_heading}}</a>
						</h2>
						<div class="entry-thumbnail">
							<a href="{{url('issue/'.$row->id)}}"><img width='761' height='400' src='{{url($row->issue_image)}}' alt='featured image'></a>
						</div>
					</header>
					<p>
						{!! str_limit(optional($row)->issue_description, 550) !!}						
					</p>
					
					
					
				</article>
				
				<a href="{{url('issue/'.$row->id)}}" class="more-link">Continue reading</a> <br>
				<div><hr class="sep" /></div>
				
				@endforeach

				<!-- Pagination -->
				<div class="paging clearfix">
					<ul class="pagination">
						{{$data->links()}}
					</ul>
				</div>

			</div>  <!-- end column -->

			<div class="col-md-4">
				<div class="sidebar-container">
					<!-- Sidebar content goes here -->
				</div>
			</div>

		</div> <!-- end row -->
	</div> <!-- end main-content -->
@endsection