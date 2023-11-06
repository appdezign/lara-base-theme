@if($widgetsliders->isNotEmpty())

	<section class="dark-mode bg-dark">
		<div class="swiper swiper-nav-onhover"
		     data-swiper-options='{
				"effect": "fade",
				"loop": true,
				"speed": 800,
				"autoplay": {
					"delay": 6000,
					"disableOnInteraction": false
				},
				"pagination": {
					"el": ".swiper-pagination",
					"clickable": true
				},
				"navigation": {
					"prevEl": ".btn-prev",
					"nextEl": ".btn-next"
				}
			}'>
			<div class="swiper-wrapper {{ $sliderclass }}">

				@foreach($widgetsliders as $widgetslider)

					<!-- Hero Item start -->
					@if($widgetslider->type == 'payoff')

						<div class="swiper-slide swiper-slide-hero h-100 bg-{{ $widgetslider->overlaycolor }}-alfa-{{ $widgetslider->overlaytransp }}"
						     style="background-image:url({{ _cimg($widgetslider->featured->filename, 1920, 960) }})">
							<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" >

								<div class="container text-center js-slider-content" style="display:none;">
									<div class="row justify-content-center">
										<div class="col-xl-8 col-lg-9 col-md-10 col-11">
											<h2 class="display-2 from-start mb-lg-24">{{ $widgetslider->title }}</h2>
											<div class="from-end">
												<div class="fs-20 pb-8 mb-lg-48">
													{!! $widgetslider->payoff  !!}
												</div>
											</div>
											@if(!empty($widgetslider->url))
												<div class="scale-up delay-1">
													<a href="{{ $widgetslider->url }}"
													   class="btn btn-primary shadow-primary btn-lg"
													   title="{{ $widgetslider->urltitle }}">
														{{ $widgetslider->urltext }}
													</a>
												</div>
											@endif
										</div>
									</div>
								</div>

							</div>
						</div>

					@elseif($widgetslider->type == 'caption')

						<div class="swiper-slide swiper-slide-hero h-100"
						     style="background-image:url({{ _cimg($widgetslider->featured->filename, 1920, 960) }})">
							<div class="hero-caption-bg hero-caption-bg-{{ $widgetslider->captiontype }}">
								<div class="text-start color-white">
									{{ $widgetslider->caption }}
								</div>
							</div>
						</div>

					@else

						<div class="swiper-slide swiper-slide-hero h-100"
						     style="background-image:url({{ _cimg($widgetslider->featured->filename, 1920, 960) }})">
						</div>

					@endif
					<!-- Hero Item end -->
				@endforeach

			</div>

			<!-- Prev button -->
			<button type="button" class="btn btn-prev btn-icon btn-sm me-2">
				<i class="far fa-chevron-left fs-14"></i>
			</button>

			<!-- Next button -->
			<button type="button" class="btn btn-next btn-icon btn-sm ms-2">
				<i class="far fa-chevron-right fs-14"></i>
			</button>

			<!-- Pagination -->
			<div class="dark-mode">
				<div class="swiper-pagination"></div>
			</div>
		</div>

	</section>

@endif