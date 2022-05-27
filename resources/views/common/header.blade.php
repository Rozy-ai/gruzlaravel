<header>
    <div class="container">
      <div class="row header_top" style="position: relative;">
  <div class="phones" style="position: absolute;">
                            @php
                              $phone_numbers = $ownInfo->phoneNumber($ownInfo->my_phone);
                              @endphp
                            <p><b><i class=" fa fa-phone"></i> 
                                </b>

                                @if (is_array($phone_numbers))
                                @foreach ($phone_numbers as $phone_number)
                                <a style="color: #fff;text-decoration: none;" href="tel:{{$phone_number}}">{{$phone_number}}</a>
                                    @endforeach
                               @else
                               <a style="color: #fff;text-decoration: none;" href="tel:{{$phone_numbers}}">{{$phone_numbers}}</a>
                                @endif
                                </p>
                              <p class="header_info"> <i class="fa fa-envelope"> </i> <a href="mailto:{{$ownInfo->my_email}}">{{$ownInfo->my_email}}</a></p>
                              </div>


        <div class="lang_img col-xs-12 text-right language_box">
                              
@include('common/language_switcher')
                     
                 
        </div>
      </div>
    </div>

  </header>
  <div class="header-middle">
    <div class="container">
        <div class="row">
           

              <div class="col-md-6" style="padding: 0">
                        <a class="site-logo" href="{{ url('') }}">
                        <img src="/img/logo.png" alt="Logo" style="margin-right: 15px;">
                <h2 style="float: right;margin-top: 10px;"><span>{{ __('site_name2') }}</span>
                  <br>{{ __('site_name') }}</h2>
                    </a>
            </div>

             <div class="col-md-6" style="text-align: right;">
                <a class="site-logo" href="{{ url('') }}">
                  <h2 style="display: inline-block;margin-top: 10px;"><span style="margin-right: 15px;font-size: 20px;font-weight: 700;margin-top: 20px;">{{ __('THE EPOCH OF THE PEOPLE WITH ARKADAG') }}</span></h2>
                        <img style="width: 120px;height: 90px;float: right;margin-left: 5px" src="/img/logo2022.png" alt="Logo" style="margin-right: 5px;">
                
                    </a>
            </div>

        </div>
    </div>
</div>




<nav class="navbar navbar-default navbar-expand-lg navbar-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="nav">
        <li class="nav-item"><a href="{{$app['url']->to('/')}}">{{__('Home')}}</a></li>
        @foreach ($items as $element)
        <li class="nav-item"><a href="{{route('item.show',$element->id)}}">{{$element->title}}</a></li>
        @endforeach
<li class="nav-item"><a href="{{$app['url']->to('item')}}">{{__('News')}}</a></li>
<li class="nav-item"><a href="/item/kadalasdyryjy-namalar">{{__('Normative legal acts')}}</a></li>
<li class="nav-item"><a href="/order">{{__('Orders')}}</a></li>
<li class="nav-item"><a href="/contact">{{__('Contact')}}</a></li>
</ul>                  
{{-- <span class="icon_search">
                    <a href="#">
                      <i class="fa fa-search"></i>
                    </a>
                  </span> --}}
    </div>
  </div>
</nav>

