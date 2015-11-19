@extends('app')

@section('content')

	<h3> {{ $contact->title}} </h3>
	<h5> <a href="{{ $contact->link }}">Link</a></h5>
	<p> {{ $contact->text }} </p>

@stop