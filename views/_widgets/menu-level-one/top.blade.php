@php
	$lang = LaravelLocalization::getCurrentLocale();
@endphp

<ul class="navbar-nav flex-row me-16">
	@foreach($menulevelone as $item)
		@if($item->publish == 1)
			<li class="nav-item">
				<a href="{{ url($lang . '/' . $item->route) }}"
				   class="nav-link fs-14 px-8 py-4">
					{{ $item->title }}
				</a>
			</li>
		@endif
	@endforeach
</ul>

