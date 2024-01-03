<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-48" data-jarallax data-speed="0.4">
	<span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
	<div class="jarallax-img" style="background-image: url({!! Theme::url('images/hero-bg.jpg') !!});"></div>
	<div class="position-relative text-center zindex-5 overflow-hidden pt-24 py-md-48">

		<!-- Slider controls (Prev / next) -->
		<button type="button" id="hero-prev" class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n16 ms-lg-8">
			<i class="fas fa-chevron-left fs-18"></i>
		</button>
		<button type="button" id="hero-next" class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n16 me-lg-8">
			<i class="fas fa-chevron-right fs-18"></i>
		</button>

		<!-- Slider -->
		<div class="container text-center py-xl-48">
			<div class="row justify-content-center pt-lg-48">
				<div class="col-xl-8 col-lg-9 col-md-10 col-11">
					<div class="js-swiper swiper pt-48 pb-24 py-md-48" data-swiper-options='{
                  "effect": "fade",
                  "speed": 500,
                  "autoplay": {
                    "delay": 5500,
                    "disableOnInteraction": false
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "clickable": true
                  },
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'>
						<div class="swiper-wrapper">

							<!-- Item -->
							<div class="swiper-slide">
								<h2 class="display-2 from-start mb-lg-24">The Best IT Solutions for Your Business</h2>
								<div class="from-end">
									<p class="fs-xl text-light opacity-70 pb-8 mb-lg-48">We provide the wide range of high quality IT services and best practices solutions to our customers making their business better.</p>
								</div>
								<div class="scale-up delay-1">
									<a href="#" class="btn btn-primary shadow-primary btn-lg">Start your project</a>
								</div>

							</div>

							<!-- Item -->
							<div class="swiper-slide">
								<h2 class="display-2 from-start mb-lg-24">Award-Winning Software Development</h2>
								<div class="from-end">
									<p class="fs-xl text-light opacity-70 pb-8 mb-lg-48">We build complex web, desktop and mobile applications. With us you get quality software and perfect service every time.</p>
								</div>
								<div class="scale-up delay-1">
									<a href="#" class="btn btn-primary shadow-primary btn-lg">View case studies</a>
								</div>
							</div>

							<!-- Item -->
							<div class="swiper-slide">
								<h2 class="display-2 from-start mb-lg-24">24/7 Tech &amp; Business Support</h2>
								<div class="from-end">
									<p class="fs-xl text-light opacity-70 pb-8 mb-lg-48">We ensure lifetime support of all applications we've built. Our support department is a team of professionals who will assist you 24/7.</p>
								</div>
								<div class="scale-up delay-1">
									<a href="#" class="btn btn-primary shadow-primary btn-lg">Work with us</a>
								</div>
							</div>
						</div>

						<!-- Pagination (bullets) -->
						<div class="swiper-pagination position-relative d-md-none pt-8 mt-48"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-48">
		<div class="d-flex mb-24 mb-sm-0">
			<a href="#" class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-8">
				<i class="fab fa-linkedin-in fs-15"></i>
			</a>
			<a href="#" class="btn btn-icon btn-secondary btn-facebook rounded-circle me-8">
				<i class="fab fa-facebook-f fs-15"></i>
			</a>
			<a href="#" class="btn btn-icon btn-secondary btn-twitter rounded-circle me-8">
				<i class="fab fa-twitter fs-15"></i>
			</a>
			<a href="#" class="btn btn-icon btn-secondary btn-youtube rounded-circle me-8">
				<i class="fab fa-youtube fs-15"></i>
			</a>
		</div>
		<a href="#" class="nav-link px-0">
			Our case studies
			<i class="fal fa-arrow-circle-right fs-16 ms-8"></i>
		</a>
	</div>
</section>
