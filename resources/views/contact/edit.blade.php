@extends('app')

@section('content')

<h2> Edit Contact: </h2>

<hr />

	{!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactController@update', $contact->id]])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::label('text', 'Text') !!}
			{!! Form::textarea('text', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('link', 'Link') !!}
			{!! Form::text('link', null, ['class' => 'form-control']) !!} 
			
		</div>

		<div class="form-group">
			{!! Form::submit('Update Contact', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop