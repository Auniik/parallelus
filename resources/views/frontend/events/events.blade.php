@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Event')
@section('content')
<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('layouts.frontend.navbar_static')
</div>
<div class="main-content container">
	<div class="row">

		<div class="main-section col-md-9">

			<header class="page-header">
				<h1 class="page-title text-center">Events</h1>
				<hr>
			</header>

			<div class="entry-content">

				<ul class="timeline" id="events_list">
					<li class="end-of-line">
						<div class="line-fade-out"></div>
					</li>
					
					
					@foreach($events as $key => $event)
					<?php

						$isOdd = (($key + 1) % 2)

					?>
					
				
					<li class="timeline-date">
						<div class="date">{{$event->event_date->day}}</div>
						<div class="month">{{$event->event_date->englishMonth}}</div>
					</li>
					
				
					<li class="{{$isOdd ? 'timeline-inverted' : 'timeline-standard'}}">
						<div class="circle"></div>
						<div class="tl-panel">
							<div class="tl-heading">{{$event->event_title}}</div>
							<div class="tl-body">
								<p>{{$event->description}}</p>
								<div class="time"><i class="fa fa-clock-o"></i> {{$event->starting_time}} - {{$event->ending_time}}</div>
								<div class="location"><i class="fa fa-map-marker"></i> {{$event->event_location}}</div>
							</div>

						</div>
						<div class="date-title">{{$event->starting_time}}</div>
					</li>
					
					

					@endforeach
				</ul>

				<!-- Paging -->
				<div class="paging clearfix">
					{{$events->links()}}
				</div>



			</div> <!-- end entry-content -->
		</div> <!-- end main-section -->

		<div class="col-md-3 col-md-offset-1">
			<div class="sidebar-container">

			</div> <!-- end sidebar -->
		</div> <!-- end column -->

	</div> <!-- end container -->
</div> <!-- end main-content -->

@endsection