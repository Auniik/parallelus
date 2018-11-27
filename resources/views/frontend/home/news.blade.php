<div id="section-news" class="wrapper">

	<div class="container">
		<?php
			$data=App\News::limit(3)->get();
		?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h2 class="heading">News &amp; Headlines</h2>
			</div>
		</div>
		
		
		<div class="row">
			<div class="news-list col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				@foreach($data as $row)
				<article class="post">
					<header>
						<h2 class="entry-title">
							<a href="{{('/news/'.$row->id.'/show')}}" title="article">{{$row->news_heading}}</a>
						</h2>
					</header>

					<p>
						{!! str_limit(optional($row)->description, 350) !!}
						<br>
						<a href="{{('/news/'.$row->id.'/show')}}" class="more-link">Continue reading</a>
					</p>

					<hr class="sep" />
				</article>
				@endforeach	
				<p class="section-more"><a href="{{url('/news')}}" class="btn btn-default">More News</a></p>
			</div>  <!-- end column -->
		</div>  <!-- end row -->
	</div>  <!-- end container -->
</div>