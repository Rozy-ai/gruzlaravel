@extends('admin.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Truck Page</div>
  <div class="card-body">
        <div class="card-body">
        

        <p class="card-text">Truck Type Tk : {{ $truck->truck_type_tk }}</p>
        <p class="card-text">Truck Type Ru : {{ $truck->truck_type_ru }}</p>
        <p class="card-text">Truck Type EN : {{ $truck->truck_type_en }}</p>
        <p class="card-text">Capacity : {{ $truck->capacity }} kg</p>
        <p class="card-text">Price hour grain : {{ $truck->price_hour_grain }} TMT</p>
        <p class="card-text">Price Km Grain : {{ $truck->price_km_grain }} TMT</p>
        <p class="card-text">Price Hour Normal : {{ $truck->price_hour_normal }} TMT</p>
        <p class="card-text">Price Hour Awtoban: {{ $truck->price_hour_awtoban }} TMT</p>
        <p class="card-text">Price Hour Danger: {{ $truck->price_hour_danger }} TMT</p>
        <p class="card-text">Price Customs Reys: {{ $truck->price_customs_reys }} TMT</p>
</div>
  </div>
       
    </hr>
  
  </div>
</div>
@stop