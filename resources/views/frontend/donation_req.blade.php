<!DOCTYPE html>
<html lang="en" class="cover">
<head>
	<meta charset="utf-8">
	<title>Donations - Political HTML Template - FrontRunner</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('frontend/css/imports.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" media="screen">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header content
	================================================== -->
	<div id="header">
		<!-- Cover element
		================================================== -->
		<div class="cover-wrapper" style="background-image: url({{asset('frontend/images/full-screen-bg-1.jpg')}})">
			<div class="cover-container"> <!-- add class 'overlay' for inner shadow -->
				<div class="cover-inner">
					<div id="donation" class="cover-left-content">
						<div class="container">
							<div class="row">
								<div class="col-sm-9 col-md-8 col-lg-7">

									<div class="logo text-left">
										<a href="{{url('/')}}">
											<img src="{{asset('frontend/images/logo-sm.png')}}" width="280" height="60" alt="FrontRunner">
										</a>
									</div>

									<div class="intro-wrap">
										<h1 class="text-left">It Starts Today!</h1>
										<p class="text-left">Help us build a better tomorrow.</p>
									</div>

									<div class="box-wrapper">
										<div class="box accent-box">

											<h3 class="text-left">DONATE TO THE CAMPAIGN</h3>

											<form class="donate-form">
												<ul class="amount-list">
													<li class="amount">
														<label for="amount-1" class="btn btn-sm btn-clear">
															<input name="amount" type="radio" id="amount-1" value="5">
															<span class="amount-text">$5</span>
														</label>
													</li>
													<li class="amount">
														<label for="amount-2" class="btn btn-sm btn-clear">
															<input name="amount" type="radio" id="amount-2" value="15">
															<span class="amount-text">$15</span>
														</label>
													</li>
													<li class="amount">
														<label for="amount-3" class="btn btn-sm btn-clear">
															<input name="amount" type="radio" id="amount-3" value="25">
															<span class="amount-text">$25</span>
														</label>
													</li>
													<li class="amount">
														<label for="amount-4" class="btn btn-sm btn-clear">
															<input name="amount" type="radio" id="amount-4" value="100">
															<span class="amount-text">$100</span>
														</label>
													</li>
												</ul>

												<button type="submit" class="btn btn-default">DONATE</button>
											</form>
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

	</div>  <!-- /#header -->


	<script src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/custom.js')}}"></script>


</body>
</html>