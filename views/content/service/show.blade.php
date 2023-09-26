@extends('layout')

@section('content')

	@include('content.'.$entity->getEntityKey().'.show.single')

@endsection

