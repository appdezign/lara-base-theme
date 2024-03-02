<?php if ($data->gridvars) require($data->gridvars); ?>
<?php if ($data->override) require($data->override); ?>

@include('larawidget', ['hook' => 'content_top'])

<section class="{{ $grd->module }}">
	<div class="{{ $grd->container }}">

		<div class="row">

			{{-- Sidebar Left --}}
			@includeWhen($grd->hasSidebarLeft, $grd->leftSidebar)

			<div class="{{ $grd->contentCols }} main-content">

				{{-- Page Title --}}
				<div class="row">
					<div class="{{ $grd->gridColumns }}">
						<div class="d-flex justify-content-between mb-48">
							<div class="page-title">
								{!! _header('title', $data->page->title, 'mb-2 mb-md-0', $data->htag->titleTag, $data->htag->id) !!}
							</div>
						</div>
					</div>
				</div>

				{{-- Render tree with objects recursively --}}
				<div class="row">
					<div class="{{ $grd->gridColumns }}">
						<ul class="object-tree">
							@foreach($data->objects as $taxonomy => $tags)
								@foreach($tags as $node)
									@include('content._partials.sort_by_tag_' . $data->params->listtype . '_render', $node)
								@endforeach
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			{{-- Sidebar Right --}}
			@includeWhen($grd->hasSidebarRight, $grd->rightSidebar)

		</div>

	</div>
</section>

@include('larawidget', ['hook' => 'content_bottom'])