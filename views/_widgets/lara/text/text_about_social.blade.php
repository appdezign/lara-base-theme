<section class="container text-center py-48 my-8 my-md-24 my-lg-48">

	{!! _header('title', 'We Have Social Networks', 'h1 mb-24', $headerTag->titleTag, $headerTag->id) !!}

	<p class="fs-lg text-muted pb-8 mb-48">Follow us and keep up to date with the freshest news!</p>
	<div class="swiper-aos" data-aos="fade-up">
		<div class="js-swiper swiper" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "650": {
              "slidesPerView": 4
            },
            "900": {
              "slidesPerView": 5
            }
          }
        }'>
			<div class="swiper-wrapper">

				<!-- Item -->
				<div class="swiper-slide">
					<div class="position-relative text-center border-end mx-n4">
						<a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link">
							<i class="fab fa-facebook-f fs-15"></i>
						</a>
						<div class="pt-24">
							{!! _header('list', 'Facebook', 'h6 mb-4', $headerTag->listTag, $headerTag->id) !!}
							<p class="fs-14 text-muted mb-0">laracms</p>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="position-relative text-center border-end mx-n4">
						<a href="#" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link">
							<i class="fab fa-instagram fs-15"></i>
						</a>
						<div class="pt-24">
							{!! _header('list', 'Instagram', 'h6 mb-4', $headerTag->listTag, $headerTag->id) !!}
							<p class="fs-14 text-muted mb-0">@laracms</p>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="position-relative text-center border-end mx-n4">
						<a href="#" class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link">
							<i class="fab fa-twitter fs-15"></i>
						</a>
						<div class="pt-24">
							{!! _header('list', 'Twitter', 'h6 mb-4', $headerTag->listTag, $headerTag->id) !!}
							<p class="fs-14 text-muted mb-0">@laracms</p>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="position-relative text-center border-end mx-n4">
						<a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link">
							<i class="fab fa-linkedin-in fs-15"></i>
						</a>
						<div class="pt-24">
							{!! _header('list', 'LinkedIn', 'h6 mb-4', $headerTag->listTag, $headerTag->id) !!}
							<p class="fs-14 text-muted mb-0">LaraCms Inc.</p>
						</div>
					</div>
				</div>

				<!-- Item -->
				<div class="swiper-slide">
					<div class="position-relative text-center border-end mx-n4">
						<a href="#" class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link">
							<i class="fab fa-youtube fs-15"></i>
						</a>
						<div class="pt-24">
							{!! _header('list', 'YouTube', 'h6 mb-4', $headerTag->listTag, $headerTag->id) !!}
							<p class="fs-14 text-muted mb-0">LaraCms</p>
						</div>
					</div>
				</div>

			</div>

			<!-- Pagination (bullets) -->
			<div class="swiper-pagination position-relative bottom-0 pt-16 mt-24"></div>
		</div>
	</div>
</section>