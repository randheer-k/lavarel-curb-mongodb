<!-- app/views/networks/create.blade.php -->
@section('content')

<h1>Create a Network <div class='pull-right margin-b-10px'><a href="/network" class="btn btn-small btn-success">Back</a> </div></h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'network')) }}

	<div class="form-group">
		{{ Form::label('n_name', 'Name') }}
		{{ Form::text('n_name', Input::old('n_name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('n_ip', 'IP') }}
		{{ Form::text('n_ip', Input::old('n_ip'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('n_status', 'Status') }}
		{{ Form::select('n_status', array('0' => 'Select', '1' => 'Enable', '2' => 'Disable'), Input::old('n_status'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@stop