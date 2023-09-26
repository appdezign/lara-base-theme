<footer class="footer dark-mode bg-dark pt-48 pb-24 pb-lg-48">
	<div class="container pt-lg-24">
		<div class="row pb-48">
			<div class="col-lg-4 col-md-6">

				@include('larawidget', ['hook' => 'footer1'])

				@include('_partials.footer.footer_subscribe')

			</div>
			<div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-24 pt-md-4 pt-lg-0">
				<div id="footer-links" class="row">
					<div class="col-lg-4">
						@include('larawidget', ['hook' => 'footer2'])
					</div>
					<div class="col-xl-4 col-lg-3">
						@include('_partials.footer.footer_socials')
					</div>
					<div class="col-xl-4 col-lg-5 pt-8 pt-lg-0">
						@include('_partials.footer.footer_contact')
					</div>
				</div>
			</div>
		</div>
		<p class="nav d-block fs-xs text-center text-md-start pb-8 pb-lg-0 mb-0">
			<span class="text-light opacity-50">&copy; All rights reserved. Created by </span>
			<a class="nav-link d-inline-block p-0" href="https://firmaq.nl/nl/" target="_blank" rel="noopener">Firmaq Media</a>
		</p>
	</div>
</footer>

<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll>
	<span class="btn-scroll-top-tooltip text-muted fs-14 me-8">Top</span>
	<i class="fas fa-chevron-up fs-16"></i>
</a>
