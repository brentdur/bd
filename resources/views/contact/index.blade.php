@extends('app')

@section('content')

<h2> Contacts: </h2>
<hr />

	@foreach ($contacts as $contact)
	<h3> {{ $contact->title}}</h3>
	<h5> <a href="{{ $contact->link }}">Link</a></h5>
	<p> {{ $contact->text }} </p>

	<hr>
	@endforeach


@stop