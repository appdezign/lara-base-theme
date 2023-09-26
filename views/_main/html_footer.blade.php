@if(config('app.env') == 'production')
	{!! Theme::js('js/app.min.js') !!}
@else
	{!! Theme::js('js/app.js?ver='.date("YmdHis")) !!}
@endif
