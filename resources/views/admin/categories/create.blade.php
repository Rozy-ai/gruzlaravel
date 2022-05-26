@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
      
    @include('admin.categories.form')
   
  </div>
</div>
 
@stop