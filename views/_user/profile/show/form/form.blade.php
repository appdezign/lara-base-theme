@php
	$req = ['data-error' => _lanq('lara-front::default.form.required'), 'required' => ''];
	$emailreq = ['data-error' => _lanq('lara-front::default.form.email_is_invalid'), 'required' => ''];
@endphp

<div class="text-right p-b-20">
	* = {{ _lanq('lara-front::default.form.required') }}
</div>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif



{{ html()->modelForm($data->object,
			'PATCH',
			route('special.user.saveprofile'))
			->id('lara-default-edit-form')
			->attributes(['accept-charset' => 'UTF-8'])
			->class('needs-validation')
			->novalidate()
			->open() }}

@if(config('lara.httpcache_on_forms'))
	<hx:include src="/csrf/input"></hx:include>
@else
	@csrf
@endif

<x-frontshowrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.username').':', 'username') }}
	</x-slot>
	{{ $data->object->username }}
</x-frontshowrow>

<x-frontshowrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.email').':', 'email') }}
	</x-slot>
	{{ $data->object->email }}
</x-frontshowrow>

<x-frontformrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.firstname').':', 'firstname') }}
	</x-slot>
	{{ html()->text('firstname', null)->class('form-control') }}
</x-frontformrow>

<x-frontformrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.middlename').':', 'middlename') }}
	</x-slot>
	{{ html()->text('middlename', null)->class('form-control') }}
</x-frontformrow>

<x-frontformrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.lastname').':', 'lastname') }}
	</x-slot>
	{{ html()->text('lastname', null)->class('form-control') }}
</x-frontformrow>

<x-frontformrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.name').':', 'name') }}
	</x-slot>
	{{ html()->text('name', null)->class('form-control') }}
</x-frontformrow>

<x-frontformrow>
	<x-slot name="label">
		{{ html()->label(_lanq('lara-' . $entity->getModule().'::'.$entity->getEntityKey().'.column.new_password').':', '_password') }}
	</x-slot>
	{{ html()->password('_password')->class('form-control')->attributes(['autocomplete' => 'new-password']) }}
</x-frontformrow>

@include('_user.profile.show.form.fields.fields')

{{ html()->hidden('_ipaddress', Request::ip()) }}

<button id="{{ $entity->getEntityKey() }}-submit-button" type="submit"
        class="btn btn-lg btn-primary pull-right">{{ _lanq('lara-eve::'.$entity->getEntityKey().'.button.submit') }}</button>

{{ html()->form()->close() }}