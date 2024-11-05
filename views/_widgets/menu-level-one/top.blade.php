<?php
$lang = LaravelLocalization::getCurrentLocale();
$navlink = ($node->type == 'url') ? $node->url : url($lang . '/' . $node->route);
?>

<ul class="navbar-nav flex-row me-16">
	@foreach($menulevelone as $item)
		@if($item->publish == 1)
			<li class="nav-item">
				<a href="{{ $navlink }}"
				   class="nav-link fs-14 px-8 py-4">
					{{ $item->title }}
				</a>
			</li>
		@endif
	@endforeach
</ul>

