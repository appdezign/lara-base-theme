@extends('layout')

@section('content')

	@include('content.'.$entity->getEntityKey().'.index.index_' . $data->params->tagsview )

@endsection