<?php
$cols = config('lara-admin.userProfile');
$cvars = json_decode(json_encode($cols), false);
?>

@foreach($cvars as $cvar)

	<?php
	$cvarfname = $cvar->name;
	$cvarfieldname = '_profile_' . $cvarfname;
	$cvarfieldtype = $cvar->type;
	$cvarvalue = $data->object->profile->$cvarfname;
	?>

	@if(!$cvar->readonly)
		<x-frontformrow>

			<x-slot name="label">
				{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.' .$cvarfieldname) .':', $cvarfieldname) }}
			</x-slot>

			@if($cvarfieldtype == 'string')
				{{ html()->text($cvarfieldname, null)->class('form-control') }}
			@endif

			@if($cvarfieldtype == 'text')
				{{ html()->textarea($cvarfieldname, null)
						->class('form-control')
						->rows(4) }}
			@endif

			@if($cvarfieldtype == 'integer')
				{{ html()->input('number', $cvarfieldname, null)
					->class('form-control')
					->attributes(['step' => '1']) }}
			@endif

			@if($cvarfieldtype == 'boolean')
				{{ html()->hidden($cvarfieldname, 0) }}
				<div class="form-check">
					{{ html()->checkbox($cvarfieldname, null, 1)
					->class('form-check-input') }}
				</div>
			@endif

		</x-frontformrow>
	@endif

@endforeach

