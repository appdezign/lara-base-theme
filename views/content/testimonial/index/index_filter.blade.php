@include('larawidget', ['hook' => 'content_top'])

<section class="{{ $data->grid->module }}">
	<div class="{{ $data->grid->container }}">

		<div class="row">

			{{-- Force Sidebar Left --}}
			@include('content._sidebars.left_tags')

			<div class="col-sm-9 main-content">

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

				{{-- Tag children --}}
				@if(!empty($data->children))
					<div class="row">
						<div class="{{ $data->grid->gridcolumns }}">
							<ul>
								@foreach($data->children as $child)
									<li>
										<a href="{{ route($entity->getPrefix() .'.' . $entity->getEntityKey() . '.'. $child->route . '.index') }}">{{ $child->title }}</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif

				{{-- Filtered Object List --}}
				@if($data->params->isgrid)
					<div class="row">
						<div class="{{ $data->grid->gridcolumns }} text-center">
							<div class="row multi-columns-row">
								@foreach($data->objects as $obj)
									<div class="col-sm-{{ $data->params->gridcol }} col-md-{{ $data->params->gridcol }} col-lg-{{ $data->params->gridcol }}">
										@include('content.' . $entity->getEntityKey() . '.index.object.grid_object')
									</div>
								@endforeach
							</div>
						</div>
					</div>
				@else
					<div class="row">
						<div class="{{ $data->grid->gridcolumns }}">
							@foreach($data->objects as $obj)
								<div class="row">
									<div class="col-sm-12">
										@include('content.' . $entity->getEntityKey() . '.index.object.list_object')
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif

				{{-- Pagination --}}
				@if($data->params->paginate)
					<div class="row">
						<div class="{{ $data->grid->gridcolumns }} text-center">
							{{ $data->objects->links('_partials.misc.pagination') }}
						</div>
					</div>
				@endif

			</div>

		</div>

	</div>
</section>

@include('larawidget', ['hook' => 'content_bottom'])