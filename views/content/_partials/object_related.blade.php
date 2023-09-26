@if(!empty($data->relatedObjects))

	<div class="mt-48 mb-48 text-center">
		<div class="divider-line"></div>
	</div>

	{{ _lanq('lara-front::default.headers.related_pages') }}:

	<ul class="object-related-pages">
		@foreach($data->relatedObjects as $relobj)

			<?php
			if ($relobj->entity_key == 'doc') {
				$doc = \Eve\Models\Doc::find($relobj->object_id);
				if ($doc && $doc->files->count()) {
					$target = '_blank';
					$relatedObjectUrl = asset('assets/media/doc/' . $doc->files[0]->filename);
				} else {
					$target = '_self';
					$relatedObjectUrl = $relobj->url;
				}
			} else {
				$target = '_self';
				$relatedObjectUrl = $relobj->url;
			}
			?>

			<li>
				<a href="{{ $relatedObjectUrl }}" target="{{ $target }}">
					{{ $relobj->title }}
				</a>
			</li>
		@endforeach
	</ul>

@endif