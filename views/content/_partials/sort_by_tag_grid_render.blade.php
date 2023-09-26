@if ($node->childobjectcount > 0)

	@php
		$nodeclass = $node->isLeaf() ? 'isLeaf' : 'hasChildren';
		$htag = ($node->depth < 6) ? $node->depth + 1 : 6;
		$htagopen = '<h' . $htag .'>';
		$htagclose = '</h' . $htag .'>';
	@endphp

	@if($node->depth > 0)

		@if(empty($data->menutag) || $node->id == $data->menutag->id)

			{{-- Tag Title --}}
			{!! $htagopen !!}{{ $node->title }}{!! $htagclose !!}

			{{-- Render Objects --}}
			@if($node->objects->count() > 0)
				<div class="row multi-columns-row">
					@foreach($node->objects as $obj)
						<div class="col-sm-{{ $data->params->gridcol }} col-md-{{ $data->params->gridcol }} col-lg-{{ $data->params->gridcol }}">
							@include('content.' . $entity->getEntityKey() . '.index.object.'.$data->params->vtype.'_object')
						</div>
					@endforeach
				</div>
			@endif

		@endif

	@endif

	{{-- Render Children --}}
	@if (!$node->isLeaf())
		@if(!empty($node->children))
			@foreach ($node->children as $node)
				@include('content._partials.sort_by_tag_grid_render', $node)
			@endforeach
		@endif
	@endif

@endif