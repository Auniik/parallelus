<footer id="footer" class="wrapper with-overlap">
	<div class="container-box">
		<div class="container">
			<div class="container-box-wrapper accent-box">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-wrapper">
							<form class="form-inline" action="{{url('newsletter/send')}}" method="post">
								@csrf
								<h3>GET INVOLVED!</h3>
								<div class="form-group {{$errors->has('userEmail') ? 'has-error' : ''}}">
									<label class="sr-only" for="email">Email address</label>
									<input id="email" class="field-full-width" name="userEmail" type="email" value=""  placeholder="Email">
									@if($errors->has('userEmail'))
			                            <div class="help-block">
			                                {{$errors->first('userEmail')}}
			                            </div>
			                        @endif
								</div>
								<div class="form-group {{$errors->has('userZip') ? 'has-error' : ''}}">
									<label class="sr-only" for="email">ZIP</label>
									<input id="zip" class="field-half-width" name="userZip" type="text" value="" placeholder="ZIP">
									@if($errors->has('userZip'))
			                            <div class="help-block">
			                                {{$errors->first('userZip')}}
			                            </div>
			                        @endif	
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
				
					{{-- $socials=App\Social::where('publication_status', 1)->orderBy('created_at', 'desc')->get(); --}}
				
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
						<li><a href="{{url('/issues')}}">Issues</a></li>
						<li><a href="{{url('/news')}}">News</a></li>
						<li><a href="{{url('/events')}}">Events</a></li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
				</div>

				{{-- Retrieving favicon from Configuration Model --}}
				<?php
					$config=App\Configuration::first();

				?>

				<div class="copyright">
					<p>&copy; {{$config==null ? 'Your Name' : $config->profile_name .' '. date("Y")}}, <a href="{{url('/')}}" rel="nofollow">{{$config==null ? 'Your website Name' : $config->profile_name}}</a>.<br>{{$config==null ? 'Your Address here' : $config->address}}</p>
				</div>

				
				<p class="small text-muted no-margin">Developed by <a href="https://www.smartsoftware.com.bd/" rel="nofollow" target="_blank">Smart Software Inc</a></p>
			</div>

		</div>

	</div>
</footer>