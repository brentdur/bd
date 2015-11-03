@extends ('app')

@section('content')

<h2> Creat Employment: </h2>
<hr />

	{!! Form::open(['url'=>'employment'])	!!}

		{!! Form::hidden('user_id', 1) !!}

		<div class="form-group">

			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			
			{!! Form::label('employer', 'Employer') !!}
			{!! Form::text('employer', null, ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('body', 'Body') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!} 
			
		</div>


		<div class="form-group">

			{!! Form::label('start_date', 'Start Date') !!}
			{!! Form::input('date', 'start_date', date('Y-m-d'), ['class' => 'form-control']) !!}

		</div>

		<div class="form-group">

			{!! Form::label('end_date', 'End Date') !!}
			{!! Form::input('date', 'end_date', date('Y-m-d'), ['class' => 'form-control']) !!}

		</div>


		<div class="form-group">
			{!! Form::submit('Add Employment', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop