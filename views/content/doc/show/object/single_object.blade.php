<div class="mt-24 pt-lg-8 pb-16">
	<h1 class="pb-16">{{ $data->object->title }}</h1>
</div>

<table class="table">
	<thead>
		<tr>
			<th style="width: 25%; padding:0; height:0; overflow: hidden;"></th>
			<th style="width: 25%; padding:0; height:0; overflow: hidden;"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bg-secondary">Document:</td>
			<td class="bg-secondary"><strong>{{ $data->object->title }}</strong></td>
		</tr>

		@if($data->object->lead)
			<tr>
				<td width="25%">Beschrijving:</td>
				<td width="75%">{!! $data->object->lead !!}</td>
			</tr>
		@endif

		<tr>
			<td width="25%">Bestand:</td>
			<td width="75%">
				@foreach($data->object->files as $objfile)
					{{ $objfile->title }}
				@endforeach
			</td>
		</tr>
	</tbody>
</table>

<div class="row mt-48">
	<div class="col-sm-12 text-center">
		@foreach($data->object->files as $objfile)
			<a href="{{ asset('assets/media/'.$entity->entity_key.'/' . $objfile->filename) }}"
			   target="_blank" class="btn btn-primary">
				DOWNLOAD
			</a>
		@endforeach
	</div>
</div>