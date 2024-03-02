@if($larawidget)

	{!! _header('title', $larawidget->title, 'mb-8 py-8 text-dark', $headerTag->titleTag, $headerTag->id) !!}

	{!! $larawidget->body !!}

@endif