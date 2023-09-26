<div class="row mt-24">
	<div class="col-sm-6">
		@if($data->prev)
			<a href="{{ route($entity->getActiveRoute(), $data->prev->slug) }}" class="btn btn-primary">
				<i class="far fa-angle-left fs-16 pt-3 me-8"></i>
				{{ _lanq('lara-front::default.button.page_prev') }}
			</a>
		@endif
	</div>
	<div class="col-sm-6 text-end">
		@if($data->next)
			<a href="{{ route($entity->getActiveRoute(), $data->next->slug) }}" class="btn btn-primary">
				{{ _lanq('lara-front::default.button.page_next') }}
				<i class="far fa-angle-right fs-16 pt-3 ms-8"></i>
			</a>
		@endif
	</div>
</div>