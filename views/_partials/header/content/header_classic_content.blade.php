<?php
if (config('app.env') != 'production') {
	$redirectRoute = Route::current()->getName();
	$redirectSlug = null;
	if ($entity->getEntityKey() != 'page' && isset($data->object->slug)) {
		$redirectRoute = Route::current()->getName();
		$redirectSlug = $data->object->slug;
	}
}
?>
<!-- Main Menu -->
<div id="navbarNav" class="offcanvas offcanvas-end">
	<div class="offcanvas-header border-bottom">
		<h5 class="offcanvas-title">Menu</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<ul class="navbar-nav me-auto mb-8 mb-lg-0">

			@widget('menuWidget', ['mnu' => 'main', 'showroot' => false, 'grid' => $data->grid])

		</ul>
	</div>
</div>

@if(config('app.env') != 'production')
	<a href="{{ route('special.cache.clear', ['redirect' => $redirectRoute, 'slug' => $redirectSlug]) }}"
	   class="btn btn-outline-light btn-sm fs-14 rounded me-16">
		<i class="fad fa-database fs-16 lh-1"></i>
	</a>
@endif

<button type="button" class="navbar-toggler ms-auto" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

