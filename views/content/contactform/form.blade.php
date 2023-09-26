@extends('layout')

@section('content')

	@include('content.'.$entity->getEntityKey().'.show.show')

@endsection

