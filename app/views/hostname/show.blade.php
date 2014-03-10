<!-- app/views/nerds/show.blade.php --> 
 @section('content')

<h1>Hostname : {{ $hostname['hostname'] }}  <div class='pull-right margin-b-10px'><a href="/hostname" class="btn btn-small btn-success">Back</a> </div></h1>

	<div>
		<h2>{{ $hostname['hostname'] }}</h2>
		<p>	
			<strong>Name:</strong> {{ $hostname['hostname'] }}<br> 
			<strong>Block:</strong> {{ $hostname['block'] ? 'Enable' : 'Disable' }}
		</p>
	</div>

</div> 
@stop