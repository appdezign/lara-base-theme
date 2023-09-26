@extends('layout_auth')

@section('content')

	<div class="d-flex h-100 justify-content-center align-items-center">
		<div class="card shadow-sm" style="width: 360px; max-width: 100%;">
			<div class="card-header d-flex justify-content-start ">
				{!! Theme::img('images/lara-logo-2023.svg', 'Silicon', 'me-15', ['width' => '47']) !!}
				<h1 class="m-0">{{ ucfirst(_lanq('lara-front::user.headers.login')) }}</h1>
			</div>
			<div class="card-body">

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul class="">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@else
					@include('flash::message')
				@endif

				<form method="POST" action="{{ route('login') }}" class="needs-validation mb-2" novalidate="">

					{!! csrf_field()  !!}

					<div class="position-relative mb-24">
						<label for="email" class="form-label fs-base">Email</label>
						<input id="email" type="text" class="form-control" name="email"
						       value="{{ old('email') }}"
						       placeholder="{{ _lanq('lara-common::auth.loginform.placeholder_email') }}"
						       required
						       autofocus>
						<div class="invalid-feedback position-absolute start-0 top-100">
							Please enter a valid email address!
						</div>
					</div>
					<div class="mb-24">
						<label for="password" class="form-label fs-base">Password</label>
						<div class="password-toggle">
							<input id="password" type="password" class="form-control" name="password"
							       placeholder="{{ _lanq('lara-common::auth.loginform.placeholder_password') }}"
							       required>
							<label class="password-toggle-btn" aria-label="Show/hide password">
								<input class="password-toggle-check" type="checkbox">
								<span class="password-toggle-indicator"></span>
							</label>
							<div class="invalid-feedback position-absolute start-0 top-100">
								Please enter your password!
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary shadow-primary btn-lg w-100">Login</button>
				</form>

			</div>
		</div>
	</div>

@endsection

