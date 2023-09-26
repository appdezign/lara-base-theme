@if($widgetObjects->isNotEmpty())

	<section class="module-sm">
		<div class="container">

			<div class="row">
				<div class="{{ $grid->gridColumns }}">
					<h2>{{ $larawidget->title }}</h2>
					{!! $larawidget->body !!}
				</div>
			</div>

			<div class="row">
				<div class="{{ $grid->gridColumns }}">

					@foreach($widgetObjects as $widgetObject)

						<div class="row mb-24">
							<div class="col-sm-4 col-md-3">
								@if($widgetObject->hasFeatured())
									<a href="{{ route($widgetEntityRoute . '.show', $widgetObject->slug) }}">
										@include('_img.lazy', ['lzobj' => $widgetObject->featured, 'lzw' => 960, 'lzh' => 960, 'ar' => '1x1'])
									</a>
								@endif
							</div>
							<div class="col-sm-8 col-md-9">
								<div>
									<h3>
										<a href="{{ route($widgetEntityRoute . '.show', $widgetObject->slug) }}">
											{{ $widgetObject->title }}
										</a>
									</h3>
									<p>{!! $widgetObject->lead !!}</p>
									<a href="{{ route($widgetEntityRoute . '.show', $widgetObject->slug) }}"
									   class="btn btn-lg btn-link btn-base">
										{{ _lanq('lara-front::home.blogwidget.readmore') }}
									</a>
								</div>
							</div>
						</div>

					@endforeach
				</div>
			</div>

		</div>
	</section>
@endif
