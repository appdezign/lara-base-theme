{!! _header('title', $data->object->title, 'lara-object-title mb-36 text-center', $data->htag->titleTag, $data->htag->id) !!}

@if($data->object->hasFeatured() && !$data->object->heroIsFeatured()  && !$data->object->iconIsFeatured())
	<div class="row gx-36 mb-48">
		<div class="col-md-6 lara-featured-image">
			<!-- desktop -->
			<div class="lara-featured-image-inner d-none d-md-block" style="background-image: url({{ _cimg($data->object->featured->filename, 960, 0, null, 2) }});">
				@if($data->object->featured->caption)
					<div class="lara-feat-img-caption">
						{!! strip_tags($data->object->featured->caption) !!}
					</div>
				@endif
			</div>
			<!-- mobile -->
			<img data-src="{{ _cimg($data->object->featured->filename, 960, 540) }}"
			     width="960" height="540"
			     title="{{ $data->object->featured->image_title }}"
			     alt="{{ $data->object->featured->image_alt }}"
			     class="lazyload d-block d-md-none mb-24"/>
		</div>
		<div class="col-md-6 lara-featured-lead">
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