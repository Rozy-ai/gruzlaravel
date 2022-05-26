    @if (!empty($truck)) 
        <form action="{{ url('/admin/trucks/' .$truck->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
         @include('admin.errors')
        <input type="hidden" name="id" id="id" value="{{$truck->id}}" id="id" />

        @else
      <form action="{{ url('admin/trucks') }}" method="post">
        {!! csrf_field() !!}
        @include('admin.errors')
             @endif







        <label>Truck Type Tk</label></br>
        <input type="text" name="truck_type_tk" id="truck_type_tk" @if (!empty($truck->truck_type_tk)) value="{{$truck->truck_type_tk}}" @endif class="form-control"></br>
        <label>Truck Type Ru</label></br>
        <input type="text" name="truck_type_ru" id="truck_type_ru" @if (!empty($truck->truck_type_ru)) value="{{$truck->truck_type_ru}}" @endif class="form-control"></br>
        <label>Truck Type En</label></br>
        <input type="text" name="truck_type_en" id="truck_type_en" @if (!empty($truck->truck_type_en)) value="{{$truck->truck_type_en}}" @endif class="form-control"></br>
        <label>Capacity</label></br>
        <input type="text" name="capacity" id="capacity" @if (!empty($truck->capacity)) value="{{$truck->capacity}}" @endif class="form-control"></br>
        <label>Price hour grain</label></br>
        <input type="text" name="price_hour_grain" id="price_hour_grain" @if (!empty($truck->price_hour_grain)) value="{{$truck->price_hour_grain}}" @endif class="form-control"></br>
        <label>Price Km Grain</label></br>
        <input type="text" name="price_km_grain" id="price_km_grain"@if (!empty($truck->price_km_grain)) value="{{$truck->price_km_grain}}" @endif  class="form-control"></br> 
        <label>Price Hour Normal</label></br>
        <input type="text" name="price_hour_normal" id="price_hour_normal" @if (!empty($truck->price_hour_normal)) value="{{$truck->price_hour_normal}}" @endif class="form-control"></br>        
        <label>Price Hour Awtoban</label></br>
        <input type="text" name="price_hour_awtoban" id="price_hour_awtoban" @if (!empty($truck->price_hour_awtoban)) value="{{$truck->price_hour_awtoban}}" @endif class="form-control"></br>        
        <label>Price Hour Danger</label></br>
        <input type="text" name="price_hour_danger" id="price_hour_danger" @if (!empty($truck->price_hour_danger)) value="{{$truck->price_hour_danger}}" @endif class="form-control"></br>               
        <label>Price Customs Reys</label></br>
        <input type="text" name="price_customs_reys" id="price_customs_reys" @if (!empty($truck->price_customs_reys)) value="{{$truck->price_customs_reys}}" @endif class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>