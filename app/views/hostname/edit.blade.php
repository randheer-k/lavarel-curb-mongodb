<!-- app/views/networks/edit.blade.php -->
@section('content') 
<h1>Edit {{ $hostname['hostname'] }} <div class='pull-right margin-b-10px'><a href="/hostname" class="btn btn-small btn-success">Back</a> </div></h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($hostname, array('route' => array('hostname.update', $hostname['_id']), 'method' => 'PUT')) }}
	 
	<div class="form-group">
		{{ Form::label('hostname', 'Hostname') }}
		{{ Form::text('hostname', null, array('class' => 'form-control')) }}
	</div>
 
	<div class="form-group">
		{{ Form::label('block', 'Block') }}
		{{ Form::select('block', array('0' => 'Select', '1' => 'Enable', '2' => 'Disable'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@stop