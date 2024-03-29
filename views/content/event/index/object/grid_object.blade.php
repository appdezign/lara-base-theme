<article class="card border-0 shadow-sm h-100">
	<div class="position-relative">
		@if($obj->hasFeatured())
			@include('_img.lazy', ['lzobj' => $obj->featured, 'lzw' => 1280, 'lzh' => 960, 'ar' => '4x3', 'cl' => 'card-img-top'])
		@else
			@include('_img.placeholder', ['phw' => 800, 'phh' => 600, 'phar' => '4x3', 'phbg' => 'e8ecf0', 'phcol' => 'd4d8dc'])
		@endif
		<a href="{{ route($entity->getActiveRoute() . '.show', $obj->routeVars) }}"
		   class="position-absolute top-0 start-0 w-100 h-100"
		   aria-label="Read more"></a>
	</div>
	<div class="card-body pb-24">
		<div class="d-flex align-items-center justify-content-between mb-16">
			<span class="fs-14 text-muted">
				{{ Date::parse($obj->publish_from)->format('j F Y') }}
			</span>
			@foreach($obj->tags->where('taxonomy_id', 2) as $tag)
				<a href="#" class="badge fs-14 text-nav bg-secondary text-decoration-none">{{ $tag->title }}</a>
			@endforeach
		</div>

		{!! _header('list', $obj->title, 'h5 mb-0', $data->htag->listTag, $data->htag->id, route($entity->getActiveRoute() . '.show', $obj->routeVars)) !!}

	</div>

</article>
