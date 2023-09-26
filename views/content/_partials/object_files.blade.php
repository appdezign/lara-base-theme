<p>{{ _lanq('lara-front::default.headers.related_docs') }}:</p>

<ul class="object-related-files">
	@foreach($data->object->files as $objfile)

		<?php
		if ($data->object->publish == 1) {
			$fileUrl = $entity->getUrlForFiles() . '/' . $objfile->filename;
		} else {
			if (Auth::check()) {
				$fileUrl = $entity->getUrlForFiles() . '/_archive/' . $objfile->filename;
			} else {
				$fileUrl = '#';
			}
		}
		?>

		<li>
			<a href="{{ $fileUrl }}"
			   target="_blank" class="bg-secondary">
				<div class="row m-0">

					<div class="col-sm-1 d-none d-sm-block text-center col1">
						{{ strtoupper(pathinfo($objfile->filename, PATHINFO_EXTENSION)) }}
					</div>
					<div class="col-10 col2">
						{{ $objfile->title }}
					</div>
					<div class="col-2 col-sm-1 text-center col3">
						<i class="far fa-arrow-to-bottom"></i>
					</div>
				</div>
			</a>
		</li>
	@endforeach
</ul>