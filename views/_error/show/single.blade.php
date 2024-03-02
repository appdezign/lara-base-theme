<?php if ($data->gridvars) require($data->gridvars); ?>
<?php if ($data->override) require($data->override); ?>

<section class="{{ $grd->module }} pt-0">
	<div class="{{ $grd->container }}">

		<div class="row">

			{{-- Sidebar Left --}}
			@includeWhen($grd->hasSidebarLeft, $grd->leftSidebar)

			<div class="{{ $grd->contentCols }} main-content">

				<div class="row">
					<div class="{{ $grd->gridColumns }}">

						{!! _header('title', $data->object->title, 'lara-object-title', $data->htag->titleTag, $data->htag->id) !!}

						{{-- BODY TEXT --}}
						{!! $data->object->body !!}

					</div>
				</div>

			</div>

			{{-- Sidebar Right --}}
			@includeWhen($grd->hasSidebarRight, $grd->rightSidebar)

		</div>

	</div>
</section>

@include('larawidget', ['hook' => 'content_bottom'])