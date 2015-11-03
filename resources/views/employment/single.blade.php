@extends('app')

@section('content')

	<h3> {{ $employment->title}} at {{ $employment->employer }} </h3>
	<h5> {{ $employment->start_date }} to </h5>
	<p> {{ $employment->body }} </p>

@stop