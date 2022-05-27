<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row footer_middle">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-5 col-sm-6 pre-footer-col">

                <div class="logo_footer" style="margin-top: 20px">

                    <a class="site-logo" style="text-align: center;" href="{{$app['url']->to('/')}}">
                        <img src="/img/logo.png" alt="Logo">
                        <span style="font-size: 20px">{{__('site_name')}}</span>
                    </a>
                </div>


            </div>
                                            <div class="col-md-3">
                                    <ul>
                    <li style="text-transform: uppercase;font-size: 20px" class="title_footer_li">{{__('Categories')}}</li>
                    <ul style="padding:0">{{-- <li><a href="{{$app['url']->to('/')}}">{{__('Home')}}</a></li> --}}
                                @foreach ($items as $element)
        <li><a href="{{route('item.show',$element->id)}}">{{$element->title}}</a></li>
        @endforeach
<li><a href="{{$app['url']->to('item')}}">{{__('News')}}</a></li>
<li><a href="/item/kadalasdyryjy-namalar">{{__('Normative legal acts')}}</a></li>
<li><a href="/order">{{__('Orders')}}</a></li></ul>
<li><a href="/contact">{{__('Contact')}}</a></li></ul>
           
                        </ul>
                </div>
                                            <div class="col-md-4">
                              <ul>
                                        <li style="text-transform: uppercase;font-size: 20px" class="title_footer_li">{{__('Contacts')}}</li>
                    <li>{{__('70 A. Gönibekow Street, Ashgabat')}}</li>
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
              <li><b><i class=" fa fa-envelope"></i> 
                                </b> <a href="mailto:{{$ownInfo->my_email }}"> {{  $ownInfo->my_email }}</a></li>
                </ul>
                </div>

        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                {{__('All rights reserved.')}} &copy; {{__('site_name')}}
            </div>

        </div>
    </div>
</div>