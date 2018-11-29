@extends('layouts.frontend.main_layout')
@section('frontend_title', 'Contact')
@section('content')
<div id="header" class="header-nav-top">

		<!-- main navigation -->
		@include('layouts.frontend.navbar_static')
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

					<form class="contact-form" action="{{url('/message/send')}}" method="post">
						@csrf
						<div class="form-group {{$errors->has('firstName') ? 'has-error' : ''}}">
							<label for="firstname" class="hidden">First Name</label>
							<input type="text" value="{{old('firstName')}}" class="form-control" name="firstName" id="firstname" placeholder="First Name">
							@if($errors->has('firstName'))
                                <div class="help-block">
                                    {{$errors->first('firstName')}}
                                </div>
                            @endif
						</div>
						<div class="form-group {{$errors->has('lastName') ? 'has-error' : ''}}">
							<label for="lastname" class="hidden">Last Name</label>
							<input type="text" value="{{old('lastName')}}" class="form-control" id="lastname" name="lastName" placeholder="Last Name">
							@if($errors->has('lastName'))
                                <div class="help-block">
                                    {{$errors->first('lastName')}}
                                </div>
                            @endif
						</div>
						<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
							<label for="email_address" class="hidden">Email</label>
							<input type="text" value="{{old('email')}}" class="form-control" id="email_address" name="email" placeholder="Email">
							@if($errors->has('email'))
                                <div class="help-block">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
						</div>
						<div class="form-group {{$errors->has('zip') ? 'has-error' : ''}}">
							<label for="zip_code" class="hidden">ZIP</label>
							<input type="text" value="{{old('zip')}}" class="form-control field-half-width" id="zip_code" name="zip" placeholder="ZIP">
							@if($errors->has('zip'))
                                <div class="help-block">
                                    {{$errors->first('zip')}}
                                </div>
                            @endif
						</div>
						<div class="form-group {{$errors->has('mobileNumber') ? 'has-error' : ''}}">
							<label for="phone" class="hidden">Mobile Phone</label>
							<input type="text" value="{{old('mobileNumber')}}" class="form-control field-half-width" id="phone" name="mobileNumber" placeholder="Mobile Phone">
							@if($errors->has('mobileNumber'))
                                <div class="help-block">
                                    {{$errors->first('mobileNumber')}}
                                </div>
                            @endif
						</div>

						<div class="form-group {{$errors->has('comments') ? 'has-error' : ''}}">
							<label for="comments" class="hidden">Comments</label>
							<textarea name="comments" value={{old('comments')}} id="comments" class="form-control" rows="10" placeholder="Comments"></textarea>
							@if($errors->has('comments'))
                                <div class="help-block">
                                    {{$errors->first('comments')}}
                                </div>
                            @endif
						</div>
						<button type="submit" class="btn btn-default">Send</button>
					</form> <!-- contact-form -->

				</div>

			</div> <!-- end main-section -->
		</div>
	</div>

		

@endsection