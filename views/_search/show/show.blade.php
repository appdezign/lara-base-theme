<section class="module-sm">
	<div class="container">

		<div class="row">

			<div class="col-12 main-content">

				{{-- Page Title --}}
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="page-title mb-48">
							{!! _header('title', 'Zoeken', 'mb-2 mb-md-0', $data->htag->titleTag, $data->htag->id) !!}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8 offset-lg-2">

						@include('_search.show.form.form')

					</div>
				</div>

			</div>

		</div>

	</div>
</section>
