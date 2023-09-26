<article>
	<div class="row mb-48">

		@if($entity->hasImages() || $entity->hasVideos())

			<div class="col-sm-3">
				<figure>
					<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}">
						@if($obj->hasFeatured())
							@include('_img.lazy', ['lzobj' => $obj->featured, 'lzw' => 800, 'lzh' => 800, 'ar' => '1x1'])
						@elseif($obj->hasVideos())
							@include('_img.youtube', ['ytcode' => $obj->video->youtubecode, 'ytsize' => 0, 'ytw' => 480, 'yth' => 360])
						@else
							@include('_img.placeholder', ['phw' => 800, 'phh' => 800, 'phar' => '1x1', 'phbg' => 'e8ecf0', 'phcol' => 'd4d8dc'])
						@endif
					</a>
				</figure>
			</div>

			<div class="col-sm-9">
				<h2>
					<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}" class="brand1">
						{{ $obj->title }}
					</a>
				</h2>
				<p>{!! $obj['lead'] !!}</p>
				<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}">Lees meer</a>
			</div>

		@else

			<div class="col-sm-12">
				<h2>
					<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}" class="brand1">
						{{ $obj->title }}
					</a>
				</h2>
				<p>{!! $obj['lead'] !!}</p>
				<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}">Lees meer</a>
			</div>

		@endif

	</div>
</article>

