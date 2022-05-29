@extends('layout')
@section('title') {{ __('Contact') }} @endsection
@section('content')

<div class="contact1 py-3">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt="">
            @if (isset($ownInfo))

                <div class="contact-text left-side">
                    <h2>{{__('Contact Us')}}</h2>
                    <div class="wpb_wrapper">
                        <div class="information-contact">
                            <p><b><i class=" fa fa-home"></i> {{__('Contact Us')}}:
                                </b>{{__('70 A. Gönibekow Street, Ashgabat')}}</p>
                            @php
                              $phone_numbers = $ownInfo->phoneNumber($ownInfo->my_phone);
                              @endphp
                            <p><b><i class=" fa fa-phone"></i> {{__('Phone number')}}:
                                </b>

                                @if (is_array($phone_numbers))
                                @foreach ($phone_numbers as $phone_number)
                                <a href="tel:{{$phone_number}}">{{$phone_number}}</a>
                                    @endforeach
                               @else
                               <a href="tel:{{$phone_numbers}}">{{$phone_numbers}}</a>
                                @endif
                                </p>
                        </div>
                    </div>
                </div>
            @endif
         
        </div>
            <form id="contact-form" class="contact1-form validate-form" method="POST" action="{{ route('contact.custom') }}">
                            @csrf
       <span class="contact1-form-title">
<h2>{{__('Send us a message')}}</h2>
</span>
        <div class="wrap-input1 validate-input" data-validate="Name is required">
            <div class="form-group field-name required">

<input type="text" id="name" class="input1" name="name" autofocus="" placeholder="{{__('name')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <div class="form-group field-email required">

<input type="email" id="email" class="input1" name="email" placeholder="{{__('Email')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate="Subject is required">
            <div class="form-group field-subject">

<input type="text" id="subject" class="input1" name="subject" placeholder="{{__('Subject')}}">

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate="Message is required">
            <div class="form-group field-message required">

<textarea id="message" class="input1" name="message" rows="6" placeholder="{{__('Message')}}" aria-required="true"></textarea>

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
        <div class="container-contact1-form-btn">
<button type="submit" class="contact1-form-btn">
{{__('Send')}}	
</button>
                    </div></form>
    </div>
</div>


@endsection