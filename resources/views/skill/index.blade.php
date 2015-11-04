@extends('app')

@section('content')

<h2> Skills: </h2>
<hr />

	@foreach ($skills as $skill)
	<h3> {{ $skill->name}}</h3>
	<p> {{ $skill->description }} </p>

	<hr>
	@endforeach


@stop