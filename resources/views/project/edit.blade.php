@extends('app')

@section('content')

<h2> Edit Project: </h2>

<hr />

	{!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectController@update', $project->id]])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::label('short', 'Short') !!}
			{!! Form::text('short', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('description', 'Description') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!} 
			
		</div>


		<div class="form-group">

			{!! Form::label('link', 'Link') !!}
			{!! Form::text('link', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">
			{!! Form::submit('Update Project', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop