<article>

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

	<div class="grid-object-{{ $entity->getEntityKey() }} grey-light-bg pt-24 pb-24 mb-36 text-center">
		<h3>
			<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}">
				{{ $obj->title }}
			</a>
		</h3>
	</div>

</article>