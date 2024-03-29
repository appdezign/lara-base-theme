@if($larawidget)
	<div class="swiper-slide h-auto">
		<div class="card h-100">
			<div class="card-body my-md-48 my-24 py-xl-8 py-md-0 py-sm-8 text-center">
				@if($larawidget->hasFeatured())
					@include('_img.lazy', ['lzobj' => $larawidget->featured, 'lzw' => 960, 'lzh' => 960, 'dw' => 40, 'dh' => 40,'ar' => '1x1', 'cl' => 'd-block', 'cnt' => true, 'cntclass' => 'mx-auto mb-16'])
				@endif

				{!! _header('list', $larawidget->title, 'h5 mb-16', $headerTag->listTag, $headerTag->id) !!}

				<p class="mb-0">{!! $larawidget->body !!}</p>

			</div>
		</div>
	</div>
@endif
