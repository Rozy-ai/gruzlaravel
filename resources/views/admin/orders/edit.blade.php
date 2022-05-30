@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">{{__('Orders')}}</div>
  <div class="card-body">
      
   @include('admin.orders.form')
   
  </div>
</div>
 
@stop