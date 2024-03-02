
<div class="mt-24 pt-lg-8 pb-16">

	<a href="{{ $data->entityListUrl }}"
	   class="btn btn-outline-primary ms-16 px-14 py-10 float-end">
		<i class="far fa-lg fa-angle-left"></i>
	</a>

	{!! _header('title', $data->page->title, 'pb-16', $data->htag->titleTag, $data->htag->id) !!}


	{{-- MEDIA GALLERY --}}
	@if($data->object->hasGallery())
		@include('content._partials.object_gallery')
	@endif

</div>



