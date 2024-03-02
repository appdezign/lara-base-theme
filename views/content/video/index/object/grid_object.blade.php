<article class="card border-0 shadow-sm h-100">
	<div class="position-relative">

		@if($obj->hasVideos())
			@include('_img.youtube', ['ytcode' => $obj->video->youtubecode, 'ytsize' => 0, 'ytw' => 480, 'yth' => 360])
		@endif

		<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}"
		   class="position-absolute top-0 start-0 w-100 h-100"
		   aria-label="Read more"></a>

	</div>
	<div class="card-body text-center pb-24">
		{!! _header('list', $obj->title, 'fs-18 fw-semibold pt-4 mb-8', $data->htag->listTag, $data->htag->id, route($entity->getActiveRoute() . '.show', $obj->routeVars)) !!}
	</div>

</article>
