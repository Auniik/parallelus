<div id="section-events" class="wrapper">

	<div class="container">

		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h2 class="heading">Events</h2>
			</div>  <!-- end column -->
		</div>  <!-- end row -->

		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

				<ul class="timeline">
					<?php
						$events=App\Event::orderBy('event_date', 'desc')->limit(3)->get();
					?>
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
								<p>{{$event->event_date->day}}</p>
								<div class="time"><i class="fa fa-clock-o"></i> {{$event->starting_time}} - {{$event->ending_time}}</div>
								<div class="location"><i class="fa fa-map-marker"></i> {{$event->event_location}}</div>
							</div>

						</div>
						<div class="date-title">{{$event->starting_time}}</div>
					</li>
					@endforeach
				</ul>

				<p class="section-more timeline-more"><a href="{{url('/events')}}" class="btn btn-default"><i class="fa fa-2x fa-plus visible-xs-inline visible-sm-inline"></i><span class="visible-md-inline visible-lg-inline">More Events</span></a></p>
			</div>  <!-- end column -->
		</div>  <!-- end row -->

	</div> <!-- end container -->
</div>