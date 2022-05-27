@extends('layout')
@section('title') {{ __('Orders') }} @endsection
@section('content')

<div class="contact_section">
    <div class="container">
        <div class="row">
            <h2 class="text-uppercase decorated"><span>{{__('Orders')}}</span></h2>
            <div class="contact-text right-side">
                <form id="order-form" action="/order/order" method="get">
                    {!! csrf_field() !!}
                    <input type="hidden" name="role" value="{{ request()->has('roles') ? request()->get('roles') : '' }}">
               <div class="row">
                        <div class="offset-md-2 col-md-8 col-xs-12">
<div class="form-group field-enterprise required">
<input type="text" required="" id="enterprise" class="form-control input-lg" name="enterprise" placeholder="{{__('Enterprise')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                    
                    </div>
                    <div class="offset-md-2 col-md-8 col-xs-12">
<div class="form-group field-name required">
<input type="text" required="" id="name" class="form-control input-lg" name="name" placeholder="{{__('Responsible person')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                    
                    </div>
                     <div class="offset-md-2 col-md-8 col-xs-12">
<div class="form-group field-phone required">
<input type="text" required="" id="phone" class="form-control ant-input input-lg" name="phone" placeholder="{{__('Phone number')}}">

<p class="help-block help-block-error"></p>
</div> </div>
                    <div class="offset-md-2 col-md-8 col-xs-12">
                        <div class="form-group field-email required">
<label class="control-label" for="email"></label>
<input type="email" id="email" class="form-control input-lg" name="email" placeholder="{{__('Email')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                    </div>


                 <div class="offset-md-2 col-md-8 col-xs-12">
                  <div class="form-group field-date required">
<label class="control-label" for="date"></label>
<input type="text" id="date" class="datepicker form-control input-lg" name="date" data-date-format="yyyy-mm-dd" placeholder="{{__('ý/a/g')}}" aria-required="true">



<p class="help-block help-block-error"></p>
</div>                </div>

                 <div class="offset-md-2 col-md-8 col-xs-12">
                  <div class="form-group field-where">
<label class="control-label" for="where"></label>
<input type="text" required="" id="where" class="form-control input-lg" name="where" placeholder="{{__('Transport departure point')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                </div>

                 <div class="offset-md-2 col-md-8 col-xs-12">
                  <div class="form-group field-too">
<label class="control-label" for="too"></label>
<input type="text" required="" id="too" class="form-control input-lg" name="too" placeholder="{{__('Transport destination')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                </div>
                 <div class="offset-md-2 col-md-8 col-xs-12">
                  <div class="form-group field-cargo_type">
<label class="control-label" for="cargo_type"></label>
<input type="text" required="" id="cargo_type" class="form-control input-lg" name="cargo_type" placeholder="{{__('Cargo type')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                </div>
                 <div class="offset-md-2 col-md-8 col-xs-12">
                  <div class="form-group field-cargo_volume">
<label class="control-label" for="cargo_volume"></label>
<input type="text" required="" id="cargo_volume" class="form-control input-lg" name="cargo_volume" placeholder="{{__('Cargo volume')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                </div>
                                    <div class="offset-md-2 col-md-8 col-xs-12">
                <div class="form-group field-message">
<label class="control-label" for="message"></label>
<textarea id="message" class="form-control input-lg" name="message" rows="6" placeholder="{{__('Note')}}" style="resize: none;"></textarea>

<p class="help-block help-block-error"></p>
</div>                </div>
                <div class="form-group input-box col-xs-12 text-center">
                    <button type="submit" class="btn btn-lg btn-block btn-success" name="contact-button">{{__('Send')}}</button>                </div>
</div>
                </form>            </div>
        </div>
    </div>
</div>
@endsection