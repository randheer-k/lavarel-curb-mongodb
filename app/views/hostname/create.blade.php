<!-- app/views/networks/create.blade.php -->
@section('content')
<h1>Create a Hostname <div class='pull-right margin-b-10px'><a href="/hostname" class="btn btn-small btn-success">Back</a> </div></h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'hostname')) }}

	<div class="form-group">
		{{ Form::label('hostname', 'Hostname') }}
		{{ Form::text('hostname', Input::old('hostname'), array('class' => 'form-control')) }}
	</div>
 

	<div class="form-group">
		{{ Form::label('block', 'Block') }}
		{{ Form::select('block', array('0' => 'Select', '1' => 'Enable', '2' => 'Disable'), Input::old('block'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@stop