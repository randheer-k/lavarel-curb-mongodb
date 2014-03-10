<!DOCTYPE html>
<html>
<head>
    <title>CURD Sample application: Randheer</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body> 
	<div class='navbar navbar-inverse navbar-fixed-top margin-b-20px'>
		<div class="navbar-inner">
        <div class="container">
          <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="brand">CURD APPLICATION IN LARAVEL WITH MONGODB EMBEDED MODEL </a> 
           @if($user_info)
           	
           <ul class="nav pull-right">
           		<li class="">
           			<a href="#">DEMO USER {{$user_info}}</a> 
           		</li>
           		<li class="divider-vertical"></li>
              <li class="">
               <a href="/logout">Logout </a>
              </li>
              
            </ul>
           @endif
        </div>
      </div>
		
	</div>
	<br clear="both">

	<br clear="both">
	<div class='margin-a margin-t-20px'>


		<div class='pull-left '>
			<ul class="nav nav-list">
	                <li class="nav-header">Curd Test App</li>
	                <li class=""><a href="/user">Users</a></li>
	                @if($user_info)
		                <li class="divider"></li>
		                 <li class="nav-header">Networks</li>
		                <li><a href="/network/create">Create</a></li>
		                <li><a href="/network">List</a></li>

		                <li class="divider"></li>
		                <li class="nav-header">Hostnames</li>
		                <li><a href="/hostname/create">Create</a></li>
		                <li><a href="/hostname">List</a></li>
	                @endif
	      </ul>
		</div>
		<div class="container pull-left margin-l-20px">  
		            @yield('content') 

		</div>
	</div>
</body>
</html>