@extends('app')

@section('content')

<h1> Articles </h1>

<hr />

@foreach ($articles as $article)
	<article>
		<a href="{{ action('ArticlesController@show', [$article->id]) }}"> {{ $article->title }}</a>
		<p> {{ $article->body }}</p>
	</article>
@endforeach

@stop