<div id="section-videos" class="wrapper video-list">
	<div class="container">
		<h2 class="heading">Videos</h2>
		<?php
			$videos=App\Video::orderBy('created_at', 'desc')->limit(4)->get();
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="video-wrapper">
					<div class="close-button">
						<i class="fa fa-times close-icon"></i>
					</div>
					@foreach($videos as $video)
					<div id="player_container" class="video-container">
						
						<div class="video-element video-element-{{$video->video_url}}">
							<div id="{{$video->video_url}}" class="video-youtube"></div><!-- Use YouTube Video ID here and in 'video-element-######' class of parent -->
						</div>
						

					</div>
					@endforeach
				</div>

			</div>
		</div>

		<div class="row">
			@foreach($videos as $video)
			<div class="col-md-3 col-sm-6">
				
				<!-- Use YouTube Video ID for 'thumb-######' and data-video-index -->
				<div class="video-thumbnail" id="thumb-{{$video->video_url}}" data-video-index="{{$video->video_url}}" style="background-image: url('http://img.youtube.com/vi/{{$video->video_url}}/0.jpg');">
					<i class="fa fa-play-circle"></i>
					<div class="overlay"></div>
				</div>
			</div>
			@endforeach
			<div class="col-sm-12">
				<p class="section-more"><a href="{{'/videos'}}" class="btn btn-default">More Videos</a></p>
			</div>
			
		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!-- end section-videos -->