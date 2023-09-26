@if($larawidget)

	<h6 class="mb-8">
		<div class="d-none text-dark py-8 d-lg-block">{{ $larawidget->title }}</div>
		<a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-8"
		   data-bs-toggle="collapse">{{ $larawidget->title }}</a>
	</h6>

	{!! $larawidget->body !!}

@endif