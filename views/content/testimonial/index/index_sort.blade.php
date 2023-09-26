@include('larawidget', ['hook' => 'content_top'])

<section class="{{ $data->grid->module }}">
	<div class="{{ $data->grid->container }}">

		<div class="row">

			{{-- Sidebar Left --}}
			@includeWhen($data->grid->sidebarleft, 'content._sidebars.left_default')

			<div class="{{ $data->grid->contentcols }} main-content">

				{{-- Page Title --}}
				<div class="row mb-48">
					<div class="{{ $data->grid->gridcolumns }} text-center">

						<h1 class="lara-object-title">
							{{ $data->page->title }}
						</h1>

						{{-- FEATURED IMAGE --}}
						@if($data->page->hasFeatured() && !$data->page->heroIsFeatured())
							<figure class="mb-48">
								@include('_img.lazy', ['lzobj' => $data->page->featured, 'lzw' => 1280, 'lzh' => 640, 'ar' => '2x1'])
							</figure>
						@endif

						{!! $data->page->body !!}

					</div>
				</div>

				{{-- Render tree with objects recursively --}}
				<div class="row">
					<div class="{{ $data->grid->gridcolumns }}">
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
			@includeWhen($data->grid->sidebarright, 'content._sidebars.right_default')

		</div>

	</div>
</section>

@include('larawidget', ['hook' => 'content_bottom'])