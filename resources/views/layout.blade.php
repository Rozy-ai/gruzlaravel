@php
use Illuminate\Support\Facades\App;
@endphp;
<!DOCTYPE html>
    <html lang="@php
        if (App::currentLocale() == 'ru')
            echo App::currentLocale();
        else
            echo 'tk';
@endphp" id="header">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="_token" content="{{csrf_token()}}" />
        <meta name="description" content="@yield('description')"/>
        <meta name="keywords" content="@yield('keywords')"/>
        @php
        $favicon = '/img/logo.png';
        @endphp
        <link rel="shortcut icon" type="image/ico" href="{{ $favicon}}"/>
        <link href="/plugins/bootstrap_datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <link href="/css/front.css" rel="stylesheet">
    </head>
    <body onscroll="scroll()">
    <div class="topbtn scrollto openblock" >
        <a href="#header"><span><i class="fa  fa-angle-double-up"></i></span></a>
    </div>

    <div class="header-wrapper">

         @include('common.header')
    </div>

         @include('admin.flash-message')
      

        <div class="main_content" style="min-height: 59vh">
              @yield('content')
        </div>

  @include('common.footer')


<script src="/js/jquery.min.js"></script>
<script src="/js/front.js"></script>
<script src="/plugins/Inputmask-5.x/dist/jquery.inputmask.js"></script>
<script src="/plugins/bootstrap_datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $('.datepicker').datepicker({
    defaultViewDate: '-3d'
});
$(document).ready(function(){
  $("#phone").inputmask("+\\9\\93 69-99-99-99");  //статическая маска
});
    $(".slider_top").slick({
                 prevArrow: '<div class=\"slick_prev\"><i class=\"fa  fa-angle-left\"></i></div>',
        nextArrow: '<div class=\"slick_next\"> <i class=\"fa  fa-angle-right\"></i> </div>',
                dots: true,
                infinite: true,
                 autoplay: true,
                autoplaySpeed: 4000,
                pauseOnFocus: false,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                arrows : true,
        cssEase: 'linear'
            });
        $(".slick_cont").slick({
    prevArrow: '<div class=\"slick_prev news_p\"><i class=\"fa fa-2x fa-angle-left\"></i></div>',
    nextArrow: '<div class=\"slick_next news_n\"> <i class=\"fa fa-2x fa-angle-right\"></i> </div>',
                dots: false,
                infinite: true,
                autoplay: false,
                autoplaySpeed: 4000,
                pauseOnDotsHover: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows : true,
        cssEase: 'linear'
            });
            $(".slider_media").slick({


                 prevArrow: '<div class=\"slick_prev\"><i class=\"fa  fa-angle-left\"></i></div>',
        nextArrow: '<div class=\"slick_next\"> <i class=\"fa  fa-angle-right\"></i> </div>',
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 4000,
                pauseOnFocus: true,
                pauseOnHover: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                arrows : true,
        cssEase: 'linear'
            });
</script>
    </body>
    </html>
