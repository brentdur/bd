@extends('app')

@section('content')

	<h3> {{ $project->name}} </h3>
	<h5> {{ $project->short }}</h5>
	<h5> <a href="{{ $project->link }}">Link</a></h5>
	<p> {{ $project->description }} </p>

@stop