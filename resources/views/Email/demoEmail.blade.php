@if ($mailData['role'] == 'fiziki')
@component('mail::message')
# {{ __('New Order') }}
@component('mail::panel')
{{__('Role')}} : {{ __('Individual') }} <br>
{{__('name')}} : {{ $mailData['name'] }} <br>
{{__('Phone number')}} : {{ $mailData['phone'] }} <br>
{{__('Email')}} : {{ $mailData['email'] }} <br>
{{__('ý/a/g')}} : {{ $mailData['date'] }} <br>
{{__('Transport departure point')}} : {{ $mailData['where'] }} <br>
{{__('Transport destination')}} : {{ $mailData['too'] }} <br>
{{__('Cargo type')}} : {{ $mailData['cargo_type'] }} <br>
{{__('Cargo volume')}} : {{ $mailData['cargo_volume'] }} <br>
{{__('Note')}} : {{ $mailData['message'] }} <br>

@endcomponent
{{ __('site_name') }}
@endcomponent
@elseif ($mailData['role'] == 'legal')
@component('mail::message')
# {{ __('New Order') }}
@component('mail::panel')
{{__('Role')}} : {{ __('Entity') }} <br>
{{__('Enterprise')}} : {{ $mailData['enterprise'] }} <br>
{{__('Responsible person')}} : {{ $mailData['name'] }} <br>
{{__('Phone number')}} : {{ $mailData['phone'] }} <br>
{{__('Email')}} : {{ $mailData['email'] }} <br>
{{__('ý/a/g')}} : {{ $mailData['date'] }} <br>
{{__('Transport departure point')}} : {{ $mailData['where'] }} <br>
{{__('Transport destination')}} : {{ $mailData['too'] }} <br>
{{__('Cargo type')}} : {{ $mailData['cargo_type'] }} <br>
{{__('Cargo volume')}} : {{ $mailData['cargo_volume'] }} <br>
{{__('Note')}} : {{ $mailData['message'] }} <br>

@endcomponent
{{ __('site_name') }}
@endcomponent
@else
@component('mail::message')
# {{ __('Contact') }}
@component('mail::panel')
{{__('name')}} : {{ $mailData['name'] }} <br>
{{__('Email')}} : {{ $mailData['email'] }} <br>
{{__('Subject')}} : {{ $mailData['subject'] }} <br>
{{__('Note')}} : {{ $mailData['message'] }} <br>
@endcomponent
{{ __('site_name') }}
@endcomponent
@endif
