@extends('admin.layout')
@section('content')


    <main class="main pt-2">

       	
       <nav aria-label="breadcrumb" class="d-none d-lg-block">
	  <ol class="breadcrumb bg-transparent p-0 justify-content-end">
	  		  					    <li class="breadcrumb-item text-capitalize"><a href="{{url('/admin')}}">Admin</a></li>
	  			  		  					    <li class="breadcrumb-item text-capitalize active" aria-current="page">Home</li>
	  			  		  </ol>
	</nav>

       	
       
        <div class="container-fluid animated fadeIn">

          	<div class="jumbotron mb-2">

	  	  <h1 class="display-3">Welcome!</h1>
	  
	  	  <p>Use the sidebar to the left to create, edit or delete content.</p>
	  
	  	  <p class="lead">
	    <a class="btn btn-primary" href="{{url('/signout')}}" role="button">Logout</a>
	  </p>
	  	</div>

	
            <p>Your custom HTML can live here</p>
          
          	
        </div>

    </main>
@stop