<?php if ($data->gridvars) require($data->gridvars); ?>
<?php if ($data->override) require($data->override); ?>

<section class="{{ $grd->module }}">
	<div class="{{ $grd->container }}">

		<div class="row">

			<div class="{{ $grd->contentCols }} main-content">

				{{-- Page Title --}}
				<div class="row">
					<div class="{{ $grd->gridColumns }}">
						<div class="page-title mb-48">
							{!! _header('title', $data->page->title, 'mb-2 mb-md-0', $data->htag->titleTag, $data->htag->id) !!}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="{{ $grd->gridColumns }}">

						@include('content.' . $entity->getEntityKey() . '.show.form.form')

					</div>
				</div>

			</div>

		</div>

	</div>
</section>
