@if($widgetpagetitle)

	<div class="jarallax d-none d-md-block" data-jarallax data-speed="0.35">
		<span class="position-absolute top-0 start-0 w-100 h-100 bg-black-alfa-40"></span>
		<div class="jarallax-img"
		     style="background-image: url({{ _cimg($widgetpagetitle->featured->filename, 1920, 960) }});"></div>
		<div class="position-relative d-flex justify-content-center align-items-center zindex-5 overflow-hidden" style="height: 130px;">
			<h3 class="fs-36 fw-normal text-white" style="opacity: 0.75">
				@if($menulevelone)
					{{ $menulevelone->title }}
				@else
					&nbsp;
				@endif
			</h3>
		</div>
	</div>

@endif