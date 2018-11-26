@extends('layouts.frontend')

@section('content')

<div id="header" class="header-nav-top">

		<!-- main navigation -->
	@include('frontend.top_navbar')	
</div> <!-- end header -->

<div class="main-content container">
	<div class="row">

		<div class="main-section">

			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
			
				<header class="page-header">
					<h1 class="page-title">News &amp; Headlines</h1>
				</header>
				@foreach($data as $row)
				<article class="post sticky">
					<header>
						{{-- <div class="header-meta">
							<span class="posted-on">August 21, 2015</span>
						</div> --}}
						<h2 class="entry-title">
							<a href="{{('/show-news/'.$row->id)}}" title="article">
								{{$row->news_heading}}
							</a>
						</h2>
						{{-- <div class="entry-thumbnail">
							<a href=""><img width="761" height="400" src="assets/images/content-post-4.jpg" alt="featured image"></a>
						</div> --}}
					</header>

					<p>
						{!! str_limit(optional($row)->description, 300) !!}
						{{-- {!!$row==null ? 'News description here' : substr($row->description, 0, 300)!!} --}}
						<br>
						<a href="{{url('/show-news/'.$row->id)}}" class="more-link">Continue reading</a>
					</p>

					<hr class="sep" />
				</article>
				@endforeach
				

				<div class="paging clearfix">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="next-post"><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>

			</div> <!-- end column -->
		</div> <!-- end main-section -->
	</div> <!-- end row -->
</div> <!-- end main-content -->	
	@include('layouts.frontendfooter')
@endsection