@foreach($data->langversions as $langver)
@if($langver->active == false)
<link rel="alternate" href="{{ $langver->route }}" hreflang="{{ $langver->langcode }}" />
@endif
@endforeach

