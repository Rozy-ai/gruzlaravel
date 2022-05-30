@extends('admin.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Order Page</div>
  <div class="card-body">
        <div class="card-body">
        
          @if ($order->role == 'fiziki')
        <p class="card-text">{{__('Role')}} : {{ __('Individual') }}</p>
        <p class="card-text">{{__('name')}} : {{ $order['name'] }}</p>
          @else
        <p class="card-text">{{__('Role')}} : {{ __('Entity') }}</p>
        <p class="card-text">{{__('Enterprise')}} : {{ $order['enterprise'] }}</p>
        <p class="card-text">{{__('Responsible person')}} : {{ $order['name'] }}</p>
          @endif
        <p class="card-text">{{__('Phone number')}} : {{ $order['phone'] }}</p>
        <p class="card-text">{{__('Email')}} : {{ $order['email'] }}</p>
        <p class="card-text">{{__('ý/a/g')}} : {{ $order['date'] }}</p>
        <p class="card-text">{{__('Transport departure point')}} : {{ $order['where'] }}</p>
        <p class="card-text">{{__('Transport destination')}} : {{ $order['too'] }}</p>
        <p class="card-text">{{__('Cargo type')}} : {{ $order['cargo_type'] }}</p>
        <p class="card-text">{{__('Cargo volume')}} : {{ $order['cargo_volume'] }}</p>
        <p class="card-text">{{__('Note')}} : {{ $order['message'] }}</p>
</div>
  </div>
       
    </hr>
  
  </div>
</div>
@stop