@extends ('app')

@section('content')

<h2> Creat Honor: </h2>
<hr />

	{!! Form::open(['url'=>'honor'])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::label('where', 'Where') !!}
			{!! Form::text('where', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('time', 'Time') !!}
			{!! Form::text('time', null, ['class' => 'form-control']) !!} 
			
		</div>

		<div class="form-group">

			{!! Form::label('what', 'What') !!}
			{!! Form::textarea('what', null, ['class' => 'form-control']) !!} 

		</div>

		<div class="form-group">
			{!! Form::submit('Add Honor', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop