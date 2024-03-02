@if(!empty($widgetObjects))

	{!! _header('title', 'Our Services', 'h1 mb-md-48 mb-24 py-xl-16 pb-lg-8 pb-md-0 pb-sm-8 text-center', $headerTag->titleTag, $headerTag->id) !!}

	@foreach($widgetObjects as $widgetObject)
		<div class="row gy-4 mb-48 pb-xl-48 pb-md-24 pb-16">
			<div class="col-lg-5 col-md-6 order-md-1 order-2 d-flex">
				<div class="align-self-center pe-lg-0 pe-md-24">

					{!! _header('list', $widgetObject->title, 'mb-md-24', $headerTag->listTag, $headerTag->id) !!}

					<p class="mb-md-24 mb-16 fs-lg">{!! $widgetObject->lead !!}</p>
					<hr class="my-md-24 my-16">

					{!! $widgetObject->body !!}

					<a href="{{ route($widgetEntityRoute . '.show', $widgetObject->slug) }}" class="btn btn-lg btn-outline-primary w-sm-auto w-100 mt-24">Learn more</a>
				</div>
			</div>
			<div class="col-md-6 offset-lg-1 order-md-2 order-1">
				<div class="bg-secondary rounded-3" data-aos="fade-left">
					@if($widgetObject->hasFeatured())
						@include('_img.lazy', ['lzobj' => $widgetObject->featured, 'lzw' => 960, 'lzh' => 720, 'ar' => '4x3'])
					@endif
				</div>
			</div>
		</div>
	@endforeach

@endif
