@section('content')
<h1 >Hostname List</h1>
<div class='pull-right margin-b-10px'><a href="/hostname/create" class="btn btn-small btn-success">Create</a> </div>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif 
<table class="table table-striped table-bordered">
    <thead>
        <tr> 
            <td>Name</td> 
            <td>Block</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
     <?php $cnt=0;   ?>
    @if(count($hostnames) > 0)
        @foreach($hostnames as $key => $value)
            <?php $cnt++; ?>
            <tr>
                <td>{{ $value['hostname'] }}</td> 
                <td>{{ $value['block'] ? 'Enable' : 'Disable' }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td class='align-left'>

                    <!-- delete the network (uses the destroy method DESTROY /networks/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the network (uses the show method found at GET /networks/{id} -->
                    <a class="btn btn-small btn-info pull-left margin-l-5px" href="{{ URL::to('hostname/' . $cnt ) }}">Detail</a>

                    <!-- edit this network (uses the edit method found at GET /networks/{id}/edit -->
                    <a class="btn btn-small btn-warning pull-left  margin-r-5px margin-l-5px" href="{{ URL::to('hostname/' . $cnt . '/edit') }}">Edit </a>

                     <!-- edit this network (uses the edit method found at GET /networks/{id}/edit -->
                     <!-- delete the network (uses the destroy method DESTROY /networks/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    {{ Form::open(array('url' => 'hostname/' . $value['_id'], 'class' => 'pull-left ')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete ', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }} 
                    
                </td>
            </tr>
        @endforeach
    @else 
             <tr>
                <td colspan='3'> No hostname found.</td>
            </tr>   
    @endif
    </tbody>
</table> 
@stop