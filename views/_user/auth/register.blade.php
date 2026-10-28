@extends('layout_auth')

@section('head-after')
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
@endsection

@section('content')

	<div class="d-flex h-100 justify-content-center align-items-center">
		<div class="card shadow-sm" style="width: 480px; max-width: 100%;">
			<div class="card-header d-flex justify-content-start ">

				<h1 class="fs-18 mt-12">
					{!! ucfirst(_lanq('lara-front::user.headers.register')) !!}
				</h1>

			</div>
			<div class="card-body">
				@if(config('lara.auth.can_register'))
					<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" autocomplete="off">
						{{ csrf_field() }}

						<div class="row mb-12 {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.email') }}
							</label>

							<div class="col-md-8">

								@if(request()->has('invite_email'))
									<input type="hidden" name="email" value="{{ request()->get('invite_email') }}">
									<input id="email" type="email" class="form-control" name="email"
									       value="{{ request()->get('invite_email') }}" disabled>
								@else
									<input id="email" type="email" class="form-control" name="email"
									       value="{{ old('email') }}" required>
								@endif

								@if ($errors->has('email'))
									<span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
								@endif
							</div>
						</div>

						<div class="row mb-12{{ $errors->has('firstname') ? ' has-error' : '' }}">
							<label for="firstname" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.firstname') }}
							</label>

							<div class="col-md-8">
								<input id="firstname" type="text" class="form-control" name="firstname"
								       value="{{ old('firstname') }}" required autofocus>

								@if ($errors->has('firstname'))
									<span class="help-block">
		                                        <strong>{{ $errors->first('firstname') }}</strong>
		                                    </span>
								@endif
							</div>
						</div>

						<div class="row mb-12 {{ $errors->has('middlename') ? 'has-error' : '' }}">
							<label for="middlename" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.middlename') }}
							</label>

							<div class="col-md-8">
								<input id="middlename" type="text" class="form-control" name="middlename"
								       value="{{ old('middlename') }}" autofocus>

								@if ($errors->has('middlename'))
									<span class="help-block">
		                                        <strong>{{ $errors->first('middlename') }}</strong>
		                                    </span>
								@endif
							</div>
						</div>

						<div class="row mb-12 {{ $errors->has('lastname') ? 'has-error' : '' }}">
							<label for="lastname" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.lastname') }}
							</label>

							<div class="col-md-8">
								<input id="lastname" type="text" class="form-control" name="lastname"
								       value="{{ old('lastname') }}" required autofocus>

								@if ($errors->has('lastname'))
									<span class="help-block">
		                                        <strong>{{ $errors->first('lastname') }}</strong>
		                                    </span>
								@endif
							</div>
						</div>

						<!--
						<div class="row mb-12 {{ $errors->has('username') ? 'has-error' : '' }}">
							<label for="username" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.username') }}
							</label>
							<div class="col-md-8">
								<input id="username" type="text" class="form-control" name="username"
								       value="{{ old('username') }}" required>
								@if ($errors->has('username'))
									<span class="help-block">
		                                        <strong>{{ $errors->first('username') }}</strong>
		                                    </span>
								@endif
							</div>
						</div>
						-->

						<div class="row mb-12 {{ $errors->has('password') ? 'has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.password') }}
							</label>

							<div class="col-md-8">
								<div class="password-toggle">
									<input id="password" type="password" class="form-control" name="password"
									       required>
									<label class="password-toggle-btn" aria-label="Show/hide password">
										<input class="password-toggle-check" type="checkbox">
										<span class="password-toggle-indicator"></span>
									</label>

								</div>

								@if ($errors->has('password'))
									<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
						</div>

						<div class="row mb-12">
							<label for="password-confirm" class="col-md-4 control-label">
								{{ _lanq('lara-admin::user.column.password_confirm') }}
							</label>

							<div class="col-md-8">

								<div class="password-toggle">
									<input id="password-confirm" type="password" class="form-control"
									       name="password_confirmation" required>
									<label class="password-toggle-btn" aria-label="Show/hide password">
										<input class="password-toggle-check" type="checkbox">
										<span class="password-toggle-indicator"></span>
									</label>
								</div>

							</div>
						</div>

						@if(config('app.env') == 'production' && config('lara.google_recaptcha_site_key'))
							<div class="row my-24 {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }}">
								<div class="col-md-8 col-md-offset-4">
									<div class="g-recaptcha"
									     data-sitekey="{{ config('lara.google_recaptcha_site_key') }}"></div>

									@if ($errors->has('g-recaptcha-response'))
										<span class="help-block">
											<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
										</span>
									@endif
								</div>
							</div>
						@endif

						<div class="row mb-12">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									{{ _lanq('lara-front::user.button.register') }}
								</button>
							</div>
						</div>

						<input type="hidden" name="invite_id" value="{{ request()->get('invite_id') }}">
						<input type="hidden" name="invite_token" value="{{ request()->get('invite_token') }}">
					</form>
					<hr class="my-16">
					<div class="row mt-16">
						<div class="col-sm-12 text-right">
							<a href="{{ route('login') }}">
								{{ _lanq('lara-front::user.button.back_to_login') }}
							</a>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection
