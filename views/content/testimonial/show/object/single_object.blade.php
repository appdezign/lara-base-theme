<h1 class="lara-object-title">{{ $data->object->title }}</h1>

{{-- FEATURED VIDEO --}}
@if($data->object->hasVideofiles())
	<div class="ratio ratio-16x9 mt-48 mb-48">
		<video controls>
			@if($data->object->publish == 1)
				<source src="{{ $entity->getUrlForVideos().'/' . $data->object->videofile->filename }}"
				        type="video/mp4">
			@else
				<source src="{{ $entity->getUrlForVideos().'/_archive/' . $data->object->videofile->filename }}"
				        type="video/mp4">
			@endif
		</video>
	</div>
@elseif($data->object->hasVideos())
	<div class="ratio ratio-16x9 mt-48 mb-48">
		<iframe width="560" height="315"
		        src="https://www.youtube.com/embed/{{ $data->object->video->youtubecode }}?rel=0"
		        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
@endif

{{-- FEATURED IMAGE --}}
@if($data->object->hasFeatured() && !$data->object->heroIsFeatured())
	<figure class="mb-48">
		@include('_img.lazy', ['lzobj' => $data->object->featured, 'lzw' => 1280, 'lzh' => 640, 'ar' => '2x1', 'fc' => false])
	</figure>
@endif

{{-- BODY TEXT --}}
{!! $data->object->body !!}

{{-- RELATED --}}
@if($entity->hasRelated())
	@include('content._partials.object_related')
@endif
{{-- FILES --}}
@if($data->object->hasFiles())
	@include('content._partials.object_files')
@endif

{{-- MEDIA GALLERY --}}
@if($data->object->hasGallery())
	@include('content._partials.object_gallery')
@endif