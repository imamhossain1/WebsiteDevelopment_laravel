	<!-- Slider Section -->
	<section class="slider_part">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner" role="listbox">
		      <!-- Slide One - Set the background image for this slide in the line below -->
		      <div class="carousel-item active" style="background-image: url('frontend/image/slider4.jpeg')">
		        <div class="carousel-caption d-none d-md-block">
		          <h2 class="display-4">First Slide</h2>
		          <p class="lead">This is a description for the first slide.</p>
		        </div>
		      </div>

			   {{-- <div class="carousel-inner" role="listbox">
				@foreach ($sliders as $slider)
    		    <div class="carousel-item active" 
				style="background-image:
				 url({{asset('frontend/upload/slider_images/'.$slider->image)}})">
		        <div class="carousel-caption d-none d-md-block">
		          <h2 class="display-4">{{$slider->short_title}}</h2>
		          <p class="lead">{{$slider->long_title}}</p>
		        </div>

					@endforeach
		      </div> --}}
		      <!-- Slide Two - Set the background image for this slide in the line below -->
		      <div class="carousel-item" style="background-image: url('frontend/image/slider5.jpg')">
		        <div class="carousel-caption d-none d-md-block">
		          <h2 class="display-4">Second Slide</h2>
		          <p class="lead">This is a description for the second slide.</p>
		        </div>
		      </div>
		      <!-- Slide Three - Set the background image for this slide in the line below -->
		      <div class="carousel-item" style="background-image: url('frontend/image/slider6.jpg')">
		        <div class="carousel-caption d-none d-md-block">
		          <h2 class="display-4">Third Slide</h2>
		          <p class="lead">This is a description for the third slide.</p>
		        </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
	        </a>
		</div>
	</section>