@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Order Page</div>
  <div class="card-body">
      
    @include('admin.orders.form')
   
  </div>
</div>
 
@stop