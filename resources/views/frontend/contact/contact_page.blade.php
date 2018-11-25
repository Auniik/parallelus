@extends('layouts.frontend')
@section('content')
<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('frontend.top_navbar')
</div> <!-- end header -->
<?php
	$config=App\ContactConfig::first();
?>

	<!-- Main Content
	================================================== -->
	<div class="main-content container">
		<div class="row">

			<div class="main-section col-md-6">

				<header class="page-header">
					<?php
                    $message=Session::get('message');
                    if ($message) { 
                        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                              </div>'; 
                        Session::put('message',null);
                    }
                ?>
					<h1 class="page-title">{{$config==null ? 'Contact Page Heading' : $config->page_heading}}</h1>
				</header>

				<div class="entry-content">

					<p>{{$config==null ? '*short description here*' : $config->description}}</p>

					<br>

					<form class="contact-form" action="{{url('/send-message')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="firstname" class="hidden">First Name</label>
							<input type="text" class="form-control" name="firstName" id="firstname" placeholder="First Name">
						</div>
						<div class="form-group">
							<label for="lastname" class="hidden">Last Name</label>
							<input type="text" class="form-control" id="lastname" name="lastName" placeholder="Last Name">
						</div>
						<div class="form-group">
							<label for="email_address" class="hidden">Email</label>
							<input type="email" class="form-control" id="email_address" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="zip_code" class="hidden">ZIP</label>
							<input type="text" class="form-control field-half-width" id="zip_code" name="zip" placeholder="ZIP">
						</div>
						<div class="form-group">
							<label for="phone" class="hidden">Mobile Phone</label>
							<input type="text" class="form-control field-half-width" id="phone" name="mobileNumber" placeholder="Mobile Phone">
						</div>

						<div class="form-group">
							<label for="comments" class="hidden">Comments</label>
							<textarea name="comments" id="comments" class="form-control" rows="10" placeholder="Comments"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Send</button>
					</form> <!-- contact-form -->

				</div>

			</div> <!-- end main-section -->

			<div class="col-md-4 col-md-offset-2">
				<div class="sidebar-container">

					<aside class="widget">
						<h3 class="heading">VOLUNTEER</h3>

						<h5><em>Get involved and help the campaign!</em></h5>
						<p>We need your support to take this campaign to the next level and win. See how you can help.</p>
						<a href="" class="small">Find out more</a>
					</aside>

					<aside class="widget">
						<h3 class="heading">MAKE A DONATION</h3>

						<h5><em>Help us fund the effort.</em></h5>
						<p>Your contributions are what make all this possible. Every donation helps so don't wait!</p>
						<a href="" class="small">Donate Now!</a>
					</aside>

					<aside class="widget">
						<h3 class="heading">WE'RE HIRING!</h3>

						<h5><em>Job openings and internships.</em></h5>
						<p>Apply for a job with the campaign or in one of our local offices or the internship program.</p>
						<a href="" class="small">Apply Here</a>
					</aside>

					<aside class="widget">
						<h3 class="heading">OFFICE LOCATIONS</h3>

						<h5><em>Main Office</em></h5>
						<p>1773 Tea Street <br /> Boston, MA 02114</p>
						<h5><em>Philadelphia</em></h5>
						<p>1776 Independence Blvd <br /> Philadelphia, PA 19107</p>
					</aside>

				</div> <!-- end sidebar -->
			</div> <!-- end column -->

		</div> <!-- end container -->
	</div> <!-- end main-content -->
@include('layouts.footer')
@endsection