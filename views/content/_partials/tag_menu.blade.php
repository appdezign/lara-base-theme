<div class="tag-menu-container">
	<div class="collapse-button">
		<a class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#collapseTagmenu" role="button"
		   aria-expanded="false"
		   aria-controls="collapseExample">
			Filters
		</a>
	</div>

	<div class="collapse" id="collapseTagmenu">

		<div class="mb-20" style="min-height:25px;">
			@if($data->params->filterbytaxonomy)
				<a href="{{ route('entitytag.'.$entity->getEntityKey().'.index') }}" style="display:block;">
					{{ _lanq('lara-eve::default.tag.show_all') }}
					{{ _lanq('lara-eve::'.$entity->getEntityKey().'.entity.entity_plural') }}
				</a>
			@endif
		</div>

		@foreach($data->tags as $taxonomy => $tags)

			<div @if($tags[0]->isLeaf()) class="hidden" @endif>
				<h3>{{ ucfirst(_lanq('lara-front::taxonomy.plural.' . $taxonomy)) }}</h3>

				<ul class="tagmenu {{ $taxonomy }} mb-48">
					@foreach($tags as $node)
						@include('content._partials.tag_menu_render', $node)
					@endforeach
				</ul>
			</div>

		@endforeach
	</div>
</div>
