<!-- app/views/nerds/show.blade.php --> 
@section('content') 
<h1>Network : {{ $network['n_name'] }} [ {{ $network['nid'] }} ] <div class='pull-right margin-b-10px'><a href="/network" class="btn btn-small btn-success">Back</a> </div></h1>

	<div >
		<h2>{{ $network['n_name'] }}</h2>
		<p>	
			<strong>Name:</strong> {{ $network['n_name'] }}<br>
			<strong>IP:</strong> {{ $network['n_ip'] }}
			<strong>Status:</strong> {{ $network['n_status'] ? 'Enable' : 'Disable' }}
		</p>
	</div>

</div>
@stop