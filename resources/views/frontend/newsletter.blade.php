<!DOCTYPE html>
<html lang="en" class="cover">
<head>
	<meta charset="utf-8">
	<title>Newsletter - Political HTML Template - FrontRunner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('frontend/css/imports.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" media="screen">

</head>
<body>
	<!-- Header content
	================================================== -->
	<div id="header">
		<!-- Cover element
		================================================== -->
		<div class="cover-wrapper" style="background-image: url(assets/images/full-screen-bg-2.jpg)">
			<div class="cover-container"> <!-- add class 'overlay' for inner shadow -->
				<div class="cover-inner">
					<div id="newsletter" class="cover-right-content">
						<div class="container">
							<div class="row">
								<div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-5 col-lg-6 col-lg-offset-6">

									{{-- <div class="logo text-left">
										<a href="#">
											<img src="assets/images/logo-sm.png" width="280" height="60" alt="FrontRunner">
										</a>
									</div> --}}

									<div class="intro-wrap">
										<h1 class="text-left">Get Updates</h1>
										<p class="text-left">Be part of something real.</p>
									</div>

									<div class="box-wrapper">
										<div class="box newsletter-box">

											<h3 class="text-left">GET INVOLVED!</h3>

											<div class="form-wrapper">
												<form action="{{url('/newsletter/send')}}" method="post">
													@csrf
													<div class="row">
														<div class="col-md-12">
															<div class="form-group {{$errors->has('userEmail') ? 'has-error' : ''}}">
																<label class="sr-only" for="email">Email address</label>
																<input id="email" name="userEmail" type="text" value=""  placeholder="Email">
																@if($errors->has('userEmail'))
										                            <div class="help-block text-warning">
										                                {{$errors->first('userEmail')}}
										                            </div>
										                        @endif
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group {{$errors->has('userZip') ? 'has-error' : ''}}">
																<label class="sr-only" for="zip">ZIP</label>
																<input id="zip" name="userZip" type="text" value=""  placeholder="ZIP">
																@if($errors->has('userZip'))
										                            <div class="help-block text-warning">
										                                {{$errors->first('userZip')}}
										                            </div>
										                        @endif
															</div>
														</div>
														<div class="col-md-6">
																<button type="submit" class="btn btn-default">UPDATE ME</button>
														</div>
													</div>
												</form>
											</div>

										</div>
									</div> <!-- end donate-wrapper -->

									<div class="continue-link">
										<a href="{{url('/')}}">Continue to the site &nbsp; <i class="fa fa-arrow-circle-right"></i></a>
									</div>

								</div>
							</div>
						</div>  <!-- /.container -->
					</div>
				</div>  <!-- /.cover-inner -->
			</div>  <!-- /.cover-container -->
		</div>  <!-- /.cover-wrapper -->

	</div>	<!-- /#header -->

	<script src="{{asset("frontend/js/jquery-1.11.3.min.js")}}"></script>
	<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("frontend/js/custom.js")}}"></script>

</body>

