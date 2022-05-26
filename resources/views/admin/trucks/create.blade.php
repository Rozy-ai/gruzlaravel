@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trucks Page</div>
  <div class="card-body">
      
    @include('admin.trucks.form')
   
  </div>
</div>
 
@stop