@extends ('app')

@section('content')

<h2> Creat Education: </h2>
<hr />

	{!! Form::open(['url'=>'education'])	!!}

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
			{!! Form::submit('Add Education', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop