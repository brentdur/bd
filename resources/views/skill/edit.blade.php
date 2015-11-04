@extends('app')

@section('content')

<h2> Edit Skill: </h2>

<hr />

	{!! Form::model($skill, ['method' => 'PATCH', 'action' => ['SkillController@update', $skill->id]])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">

			{!! Form::label('description', 'Description') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!} 
			
		</div>

		<div class="form-group">
			{!! Form::submit('Update Skill', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop