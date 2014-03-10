<!-- app/views/networks/edit.blade.php -->

@section('content') 
<h1>Edit {{ $network['n_name'] }} <div class='pull-right margin-b-10px'><a href="/network" class="btn btn-small btn-success">Back</a> </div></h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($network, array('route' => array('network.update', $network['_id']), 'method' => 'PUT')) }}
	{{ Form::hidden('nid', null, array('class' => 'form-control')) }}
	<div class="form-group">
		{{ Form::label('n_name', 'Name') }}
		{{ Form::text('n_name', null, array('class' => 'form-control')) }}
	</div>

	
	<div class="form-group">
		{{ Form::label('n_ip', 'ip') }}
		{{ Form::text('n_ip', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('n_status', 'Status') }}
		{{ Form::select('n_status', array('0' => 'Select', '1' => 'Enable', '2' => 'Disable'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop