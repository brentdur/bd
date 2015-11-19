@extends('app')

@section('content')

<h2> Education: </h2>
<hr />

	@foreach ($educations as $education)
	<h3> {{ $education->where}} </h3>
	<h5> {{ $education->description }}</h5>
	<hr>
	@endforeach


@stop