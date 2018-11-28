<div id="section-slider" class="featured-slider">
	<div class="featured-carousel">
        <?php
			$published_sliders=App\Slider::where('publication_status', 1)->get();

         ?>
		@foreach($published_sliders as $slider)
		<div class="item">
			<div class="bg-img" style="background-image: url({{$slider->slider_image}})"></div>
			<div class="color-hue"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<article>
							<h3>
								<em>{{$slider->slider_text}}</em>
							</h3>
						</article>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>