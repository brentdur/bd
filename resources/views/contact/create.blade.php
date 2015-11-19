@extends ('app')

@section('content')

<h2> Creat Contact: </h2>
<hr />

	{!! Form::open(['url'=>'contact'])	!!}

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
			{!! Form::submit('Add Contact', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}



@stop