<footer id="footer" class="wrapper with-overlap">
	<div class="container-box">
		<div class="container">
			<div class="container-box-wrapper accent-box">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-wrapper">
							<form class="form-inline" action="{{url('send-newsletter')}}" method="post">
								@csrf
								<h3>GET INVOLVED!</h3>
								<div class="form-group">
									<label class="sr-only" for="email">Email address</label>
									<input id="email" class="field-full-width" name="userEmail" type="email" value="" required="required" placeholder="Email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="email">ZIP</label>
									<input id="zip" class="field-half-width" name="userZip" type="text" value="" required="required" placeholder="ZIP">
								</div>
								<button type="submit" class="btn btn-default">Update Me</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end get-involved -->

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<?
					$socials=App\Social::get();
				?>
				<ul class="footer-social icon-blocks">
					@foreach($socials as $social)
					@if(substr($social->social_link,0,3)=='http')
						<li><a href="{{$social->social_link}}"><i class="{{$social->social_name}}"></i></a></li>
					@else
						<li><a href="http://{{$social->social_link}}"><i class="{{$social->social_name}}"></i></a></li>
					@endif
					@endforeach
				</ul>

				

				<div class="footer-nav">
					<ul>
						<li><a href="{{url('/about')}}">About</a></li>
						<li><a href="{{url('/issues')}}">On the Issues</a></li>
						<li><a href="{{url('/news-list')}}">News</a></li>
						<li><a href="{{url('/events')}}">Events</a></li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
						<li><a href="{{url('/donate')}}"><strong class="text-danger">Donate</strong></a></li>
					</ul>
				</div>

				<?php
					$config=App\Configuration::first();

				?>

				<div class="copyright">
					<p>&copy; {{$config==null ? 'Your Name' : $config->profile_name .' '. date("Y")}}, <a href="{{route('root')}}s" rel="nofollow" target="_blank">{{$config==null ? 'Your website Name' : $config->profile_name}}</a>.<br>{{$config==null ? 'Your Address here' : $config->address}}</p>
				</div>

				
				<p class="small text-muted no-margin">Developed by <a href="https://www.smartsoftware.com.bd/" rel="nofollow" target="_blank">Smart Software Inc</a></p>
			</div>

		</div>

	</div>
</footer>