<?php
$lang = LaravelLocalization::getCurrentLocale();

if ($node->isLeaf() || sizeof($node->children) == 0) {
	$nodeHasChildren = false;
} else {
	$nodeHasChildren = true;
}

if ($node->isRoot()) {
	$nodeHasChildren = false;
}
?>

@if($node->isRoot())

	{{-- home --}}
	<li class="nav-item" id="menu-item-{{ $node->id }}">
		<a href="{{ url($lang . '/') }}" @if(sizeof($activemenu) == 1) class="active" @endif >
			{{ $node->title }}
		</a>
	</li>

	{{-- get level 2 and move it one level up, add it to home --}}
	@if ($nodeHasChildren)
		@foreach ($node->children as $node)
			@include('_widgets.menu.menu_render', $node)
		@endforeach
	@endif

@else

	@if($nodeHasChildren)
		<li class="nav-item dropdown" id="menu-item-{{ $node->id }}">
			<a href="#"
			   class="nav-link dropdown-toggle @if(in_array($node->id, $activemenu)) active @endif"
			   data-bs-toggle="dropdown">
				{{ $node->title }}
			</a>

			<ul class="dropdown-menu" id="menu-item-{{ $node->id }}-submenu">
				<li>
					@foreach ($node->children as $node)
						@include('_widgets.menu.menu_render', $node)
					@endforeach
				</li>
			</ul>
		</li>
	@else
		@if($node->depth > 1)
			<li id="menu-item-{{ $node->id }}">
				<a href="{{ url($lang . '/' . $node->route) }}"
				   class="dropdown-item @if(in_array($node->id, $activemenu)) active @endif">
					{{ $node->title }}
				</a>
			</li>
		@else
			<li class="nav-item" id="menu-item-{{ $node->id }}">
				<a href="{{ url($lang . '/' . $node->route) }}"
				   class="nav-link @if(in_array($node->id, $activemenu)) active @endif">
					{{ $node->title }}
				</a>
			</li>
		@endif
	@endif

@endif
