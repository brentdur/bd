@extends('app')

@section('content')

	<h3> {{ $honor->title}} at {{ $honor->where }} </h3>
	<h5> {{ $honor->time }}</h5>
	<p> {{ $honor->what }} </p>

@stop