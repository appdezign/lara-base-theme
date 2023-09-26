<section class="{{ $data->grid->module }}">
	<div class="{{ $data->grid->container }}">

		<div class="row">

			{{-- Sidebar Left --}}
			@includeWhen($data->grid->sidebarleft, 'content._sidebars.left_default')

			<div class="{{ $data->grid->contentcols }} main-content">

				<div class="row">
					<div class="{{ $data->grid->gridcolumns }}">
						<a href="{{ $data->entityListUrl }}"
						   class="btn btn-base btn-outline float-end">{{ _lanq('lara-front::default.button.go_back') }}</a>
					</div>
				</div>
				<div class="row">
					<div class="{{ $data->grid->gridcolumns }}">

						@include('content.' . $entity->getEntityKey() . '.show.object.single_object')

					</div>
				</div>

				@if($data->params->prevnext)
					<div class="row">
						<div class="{{ $data->grid->gridcolumns }}">
							@include('content._partials.single_prevnext')
						</div>
					</div>
				@endif

			</div>

			{{-- Sidebar Right --}}
			@includeWhen($data->grid->sidebarright, 'content._sidebars.right_default')

		</div>

	</div>
</section>
