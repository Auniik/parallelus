@extends('layouts.frontend.main_layout')
@section('frontend_title', 'News')
@section('content')

<div id="header" class="header-nav-top">

		<!-- main navigation -->
	@include('layouts.frontend.navbar_static')	
</div> <!-- end header -->

<div class="main-content container">
	<div class="row">

		<div class="main-section">

			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
			
				<header class="page-header">
					<h1 class="page-title">News &amp; Headlines</h1>
					<hr>
				</header>
				@foreach($data as $row)
				<article class="post sticky">
					<header>
						{{-- <div class="header-meta">
							<span class="posted-on">August 21, 2015</span>
						</div> --}}
						<h2 class="entry-title">
							<a href="{{url('/news/'.$row->id)}}" title="article">
								{{$row->news_heading}}
							</a>
						</h2>
						<div class="entry-thumbnail">
							<a href=""><img width="761" height="400" src="{{url($row->article_image)}}" alt="featured image"></a>
						</div>
					</header>

					<p>
						{!! str_limit(optional($row)->description, 300) !!}
						{{-- {!!$row==null ? 'News description here' : substr($row->description, 0, 300)!!} --}}
						<br>
					</p>
						<a href="{{url('/news/'.$row->id)}}" class="more-link">Continue reading</a>

					<hr class="sep" />
				</article>
				@endforeach
				

				<div class="paging clearfix">
					<ul class="pagination">
						{{$data->links()}}
					</ul>
				</div>

			</div> <!-- end column -->
		</div> <!-- end main-section -->
	</div> <!-- end row -->
</div> <!-- end main-content -->
@endsection