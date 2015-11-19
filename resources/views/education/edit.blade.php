@extends('app')

@section('content')

<h2> Edit Education: </h2>

<hr />

	{!! Form::model($education, ['method' => 'PATCH', 'action' => ['EducationController@update', $education->id]])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('where', 'Where') !!}
			{!! Form::text('where', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::label('description', 'Description') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">
			{!! Form::submit('Update Education', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop