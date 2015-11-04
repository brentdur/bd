@extends ('app')

@section('content')

<h2> Create Skill: </h2>
<hr />

	{!! Form::open(['url'=>'skill'])	!!}

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
			{!! Form::submit('Add Skill', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop