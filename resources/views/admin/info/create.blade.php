@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Info Page</div>
  <div class="card-body">
      
    @include('admin.info.form')
   
  </div>
</div>
 
@stop