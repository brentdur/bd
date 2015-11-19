@extends('app')

@section('content')

<h2> Honors: </h2>
<hr />

	@foreach ($honors as $honor)
	<h3> {{ $honor->title}} at {{ $honor->where }} </h3>
	<h5> {{ $honor->time }}</h5>
	<p> {{ $honor->what }} </p>

	<hr>
	@endforeach


@stop