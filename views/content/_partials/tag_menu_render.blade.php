@if($node->depth == 0)

	@foreach($node->children as $node)
		@include('content._partials.tag_menu_render', $node)
	@endforeach

@else

	<li @if($node->isLeaf() && $node->object_count== 0) class="hidden" @endif>

		<a href="{{ route($entity->getPrefix() .'.' . $entity->getEntityKey() . '.'. $node->route . '.index') }}"
		   class="@if($node->slug == $data->params->filterbytaxonomy) active @endif">
			{{ $node->title }}
		</a>

		@if(!$node->isLeaf())
			<ul>
				@foreach($node->children as $node)
					@include('content._partials.tag_menu_render', $node)
				@endforeach
			</ul>
		@endif

	</li>

@endif



