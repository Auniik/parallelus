<div class="header-inner menu-container">
	<div class="navbar-wrapper do-transition">
		<nav class="navbar navbar-default navbar-vertical" id="nav-main">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{url('/')}}" class="navbar-brand">{{$config==null ? 'Your Name' : $config->profile_name}}</a>
				</div>
<!-- //NAVBAR -->
				<div class="collapse navbar-collapse" id="navbar-main">
					<ul class="nav navbar-nav" id="nav-left">
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/issues')}}">Issues</a></li>
						<li class="dropdown show-on-hover">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">News</a>
							<ul class="dropdown-menu">
								<li><a href="{{url('/news')}}">News</a></li>
								<li><a href="{{('/videos')}}">Videos</a></li>
								<li><a href="{{('/events')}}">Events</a></li>
							</ul>
						</li>
						<li class="dropdown show-on-hover">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">About</a>
							<ul class="dropdown-menu">
								<li><a href="{{url('/about')}}">About {{$config==null ? 'Your Name here' : $config->profile_name}}</a></li>
								<li><a href="page-features.html">Features</a></li>
							</ul>
						</li>
						<li><a href="{{url('/contact')}}">Contact</a></li>
					</ul>
					{{-- <ul class="nav navbar-nav" id="nav-right">
						<li><a href="{{url('/donate')}}">Donate</a></li>
					</ul> --}}
				</div>
			</div>
		</nav>  <!-- end default nav -->
	</div>  <!-- end navbar-wrapper -->
</div>  <!-- end header-inner -->