{!! _header('title', $data->object->title, 'lara-object-title mb-36 text-center', $data->htag->titleTag, $data->htag->id) !!}

@if($data->object->hasFeatured() && !$data->object->heroIsFeatured()  && !$data->object->iconIsFeatured())
	<div class="row gx-36 mb-48">
		<div class="col-md-6">
			<img data-src="{{ _cimg($data->object->featured->filename, 960, 0, null, 2) }}"
			     width="960"
			     title="{{ $data->object->featured->image_title }}"
			     alt="{{ $data->object->featured->image_alt }}"
			     class="lazyload"/>
		</div>
		<div class="col-md-6">
			{!! $data->object->lead !!}
		</div>
	</div>
@else
	<div class="row mb-72">
		<div class="col-12">
			{!! $data->object->lead !!}
		</div>
	</div>
@endif

{{-- BODY TEXT --}}
{!! $data->object->body !!}

@include('larawidget', ['hook' => 'bodytext_bottom'])

{{-- RELATED --}}
@if($entity->hasRelated())
	@include('content._partials.object_related')
@endif

{{-- FILES --}}
@if($data->object->hasFiles())
	@include('content._partials.object_files')
@endif

{{-- GALLERY --}}
@if($data->object->hasGallery())
	@include('content._partials.object_gallery')
@endif