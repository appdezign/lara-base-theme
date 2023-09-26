<article class="card border-0 shadow-sm h-100">
	<div class="position-relative">
		<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}"
		   class="position-absolute top-0 start-0 w-100 h-100"
		   aria-label="Read more"></a>
		@if($obj->hasFeatured())
			@include('_img.lazy', ['lzobj' => $obj->featured, 'lzw' => $teamWidth, 'lzh' => $teamHeight, 'ar' => $teamRatio, 'cl' => 'card-img-top'])
		@else
			@include('_img.placeholder', ['phw' => $teamWidth, 'phh' => $teamHeight, 'phar' => $teamRatio, 'phbg' => 'e8ecf0', 'phcol' => 'e8ecf0'])
		@endif
	</div>
	<div class="card-body text-center pb-24">
		<h3 class="fs-18 fw-semibold pt-4 mb-8">
			<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}">
				{{ $obj->firstname }} {{ $obj->middlename }} {{ $obj->title }}
			</a>
		</h3>
		<p class="fs-14 mb-0">{{ $obj->role }}</p>
	</div>

</article>
