<article class="card border-0 shadow-sm h-100">
	<div class="position-relative">
		@if($obj->hasFeatured())
			@include('_img.lazy', ['lzobj' => $obj->featured, 'lzw' => $teamWidth, 'lzh' => $teamHeight, 'ar' => $teamRatio, 'cl' => 'card-img-top'])
		@else
			@include('_img.placeholder', ['phw' => $teamWidth, 'phh' => $teamHeight, 'phar' => $teamRatio, 'phbg' => 'e8ecf0', 'phcol' => 'e8ecf0'])
		@endif
		<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}"
		   class="position-absolute top-0 start-0 w-100 h-100"
		   aria-label="Read more"></a>
	</div>
	<div class="card-body text-center pb-24">
		{!! _header('list', $obj->title, 'fs-18 fw-semibold pt-4 mb-8', $data->htag->listTag, $data->htag->id, route($entity->getActiveRoute() . '.show', $obj->routeVars)) !!}
		<p class="fs-14 mb-0">{{ $obj->role }}</p>
	</div>

</article>
