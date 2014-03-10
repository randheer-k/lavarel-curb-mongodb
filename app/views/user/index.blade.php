<!-- app/views/networks/index.blade.php -->
@section('content') 
<h1 >Users</h1>  
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif 
<table class="table table-striped table-bordered">
    <thead>
        <tr> 
            <td>User</td>  
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
     <?php $cnt=0; ?>
    @foreach($users as $key => $value)
        <?php $cnt++; ?>
        <tr>
            <td> Demo user {{ $cnt }}</td>  

            <!-- we will also add show, edit, and delete buttons -->
            <td class='align-left'>
                @if((int)Session::get('user') != $value['uid'] )  
                    <a class="btn btn-small btn-info pull-left margin-l-5px" href="{{ URL::to('user/' . $value['uid'] ) }}">
                        Login
                    </a>
                @else 
                     <a class="btn btn-small btn-warning pull-left margin-l-5px" href="{{ URL::to('/logout' ) }}">
                    Logout
                </a>
                @endif
                 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop