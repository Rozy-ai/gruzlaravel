        <form action="{{ url('/admin/orders/' .$order->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
         @include('admin.errors')
        <input type="hidden" name="id" id="id" value="{{$order->id}}" id="id" />

        @if ($order->role == 'fiziki')
        <label>{{__('Role')}}</label></br>
            <select name="role" id="role" class="form-control">
               <option disabled>{{__('Role')}}</option>
               <option selected value="fiziki">{{ __('Individual') }}</option>
               <option value="legal">{{ __('Entity') }}</option>
            </select><br>
        <label>{{__('name')}}</label></br>
        <input type="text" name="name" id="name" @if (!empty($order->name)) value="{{$order->name}}" @endif class="form-control"></br>

        @else
            <label>{{__('Role')}}</label></br>
            <select name="role" id="role" class="form-control">
               <option disabled>{{__('Role')}}</option>
               <option value="fiziki">{{ __('Individual') }}</option>
               <option selected value="legal">{{ __('Entity') }}</option>
            </select><br>
        
        <label>{{__('Enterprise')}}</label></br>
        <input type="text" name="enterprise" id="enterprise" @if (!empty($order->enterprise)) value="{{$order->enterprise}}" @endif class="form-control"></br>

        <label>{{__('Responsible person')}}</label></br>
        <input type="text" name="name" id="name" @if (!empty($order->name)) value="{{$order->name}}" @endif class="form-control"></br>
        @endif  

        <label>{{__('Phone number')}}</label></br>
        <input type="text" name="phone" id="phone" @if (!empty($order->phone)) value="{{$order->phone}}" @endif class="form-control"></br>

        <label>{{__('Email')}}</label></br>
        <input type="text" name="email" id="email" @if (!empty($order->email)) value="{{$order->email}}" @endif class="form-control"></br>

        <label>{{__('ý/a/g')}}</label></br>
        <input type="text" name="date" id="date" @if (!empty($order->date)) value="{{$order->date}}" @endif class="form-control"></br>

        <label>{{__('Transport departure point')}}</label></br>
        <input type="text" name="where" id="where" @if (!empty($order->where)) value="{{$order->where}}" @endif class="form-control"></br>        

        <label>{{__('Transport destination')}}</label></br>
        <input type="text" name="too" id="too" @if (!empty($order->too)) value="{{$order->too}}" @endif class="form-control"></br>        

        <label>{{__('Cargo type')}}</label></br>
        <input type="text" name="cargo_type" id="cargo_type" @if (!empty($order->cargo_type)) value="{{$order->cargo_type}}" @endif class="form-control"></br>        

        <label>{{__('Cargo volume')}}</label></br>
        <input type="text" name="cargo_volume" id="cargo_volume" @if (!empty($order->cargo_volume)) value="{{$order->cargo_volume}}" @endif class="form-control"></br>        

        <label>{{__('Note')}}</label></br>
        <input type="text" name="message" id="message" @if (!empty($order->message)) value="{{$order->message}}" @endif class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>