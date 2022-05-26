@extends('layout')
@section('title') {{ __('Home') }} @endsection
@section('content')
@if (!empty($search))
<script>
  function goToByScroll(id){
    $('html,body').animate({scrollTop: $('#'+id).offset().top},'slow');
}
goToByScroll('yakor');
</script>
@endif

<div class="container-fluid" style="padding: 0">
<section class="top_slider_wrapper">
@isset ($sliders)

    <div class="slider_top">
      @foreach ($sliders as $slider)
        @php
          $documents = $slider->docs; 
        @endphp
        @foreach ($documents as $document)
          @php
            $slds[] = '/uploads/'.$document['path'];
          @endphp
        @endforeach
        @php
              $language = App::currentLocale();
    if ($language == 'ru') {
      $imagePath = $slds[1];
    } elseif ($language == 'en') {
      $imagePath = $slds[2];
    } else {
      $imagePath = $slds[0];
    }
    unset($slds);
        @endphp
      
          <div class="slider_wrapper">
        <img src="<?= $imagePath  ?>" alt="" class=" img-responsive top_slider_img">
       
        </div>
      @endforeach
          </div>

@endisset

</section>
</div>

<section class="about" style="padding-bottom: 100px;background-color: gainsboro">
  <div class="container" style="position: relative;">
  <div class="row">
      <div class="col-sm-6">

        <h2>{{$about->title}}</h2>
        <p style="font-size: 18px">{{$about->description }}</p>
        <a href="{{route('item.show',$about->id)}}" style="color: #000"><button type="button" class="btn btn-light" style="    background-color: #079c34;margin-top: 30px;border-radius: 7px;font-size: 20px;padding: 10px 80px;color: #fff">{{__('Read more')}}</button></a>
      </div>
      <div class="col-sm-6" style="position: relative;">
        <img src="{{'/img/Rectangle27.png'}}" style="position: absolute;width: 130%;right: 0;" alt="">
      </div>
  </div>
</div>
</section>

<div style="padding: 30px"></div>
<section class="counter_section parallax" style="background-image:url({{'/img/8018.jpg'}})">
<div class="container" style="position: relative;">
  <div class="title-h1 white text-center">
            {{__('Our achievements in numbers')}}
        </div>
<div class="d-flex justify-content-around">
        <div class="elementor-counter text-center">
          <span class="counter count">{{60}}</span>
          <p class="count-title">
            {{__('years of experience')}}</p>
        </div>
        <div class="elementor-counter text-center">
          <span class="counter count">{{24}}</span>
          <p class="count-title">
            {{__('hours at your service')}}</p>
        </div>
        <div class="elementor-counter text-center">
          <span class="counter count last_counter">{{100}}</span>
          <p class="count-title">
            {{__('guarantee of cargo safety')}}</p>
        </div>
</div>
</div>
</section>


<section class="news">
<div class="container">
    <a href="{{$app['url']->to('item')}}" style="text-decoration: none;"><h2><span>{{__('News')}}</span></h2></a>

<div class="slick_cont">
  @foreach ($news as $element)
      <div class="card">
    <div class="post-wrapper">
    <a href="{{route('item.show',$element->id)}}" style="text-decoration: none;">
      <div class="post-thumbnail">
        <img src="{{$element->getImage()}}" class="new_img zoom" alt="{{$element->title}}">
     </div>

    <div class="post-content">
          <div class="new_date"><b>{{$element->renderDateToWord($element->date_created)}}</b></div>
          <h2 class="new_title" style="color: #303030">{{
            $element->title 
          }}</h2>
      </div>
    </div>
    </a>
  </div>
  @endforeach
</div>
      <div class="clearfix"></div>

    </div>
</section>


<section class="contacts" style="background: gainsboro;padding-top: 50px">
    <div class="container">
        <div class="row">

                 <h2><span style="background-color: gainsboro">{{__('Contacts')}}</span></h2>
                 <div class="body_contact" style="padding: 0">
                  <div class="row">
<div class="col-md-6">
                         <form id="contact-form" class="contact2-form validate-form" action="{{ url('admin/categories') }}" method="post">
{!! csrf_field() !!} 
      <div class="wrap-input1 validate-input" data-validate="Name is required">
            <div class="form-group field-name required">
<label class="control-label" for="name">{{__('name')}}</label>
<input type="text" id="name" class="form-control input-lg" name="name" placeholder="{{__('Fullname')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input">
            <div class="form-group field-phone">
<label class="control-label" for="phone">{{__('Phone number')}}</label>
<input type="text" id="phone" class="form-control input-lg" name="phone" placeholder="{{__('Phone number')}}">


<p class="help-block help-block-error"></p>
</div>                </div>
        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <div class="form-group field-email required">
<label class="control-label" for="email">{{__('Public Email')}}</label>
<input type="email" id="email" class="form-control input-lg" name="email" placeholder="{{__('Public Email')}}" aria-required="true">

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Message is required">
            <div class="form-group field-message required">
<label class="control-label" for="message">{{__('Message')}}</label>
<textarea id="message" class="form-control input-lg" name="message" rows="3" placeholder="{{__('Message')}}" aria-required="true"></textarea>

<p class="help-block help-block-error"></p>
</div>            <span class="shadow-input1"></span>
        </div>
     <br>
<button type="submit" class="contact2-form-btn">{{__('Send')}}</button>
           
            </form>            </div>
            <div class="col-md-6" style="padding-right: 0">
                            <section class="top_slider_wrapper">
@isset ($galleries)
 <div class="slider_media">
{{--   @foreach ($galleries as $gallery)
@php
  $image = '/images/'.$gallery->getFilename();
@endphp
            <div class="slider_wrapper">
        <img src="{{$image}} " alt="" class=" img-responsive top_slider_img">
       
        </div>
@endforeach --}}
      @foreach ($galleries as $gallery)
        @php
          $documents = $gallery->docs; 
        @endphp
        @foreach ($documents as $document)
          @php
            $slds[0] = '/uploads/'.$document['path'];
            
          @endphp
        @endforeach
        @php
    //           $language = App::currentLocale();
    // if ($language == 'ru') {
    //   $imagePath = $slds[1];
    // } elseif ($language == 'en') {
    //   $imagePath = $slds[2];
    // } else {
    //   $imagePath = $slds[0];
    // }
    // unset($slds);
        $imagePath = $slds[0];
        @endphp
      
          <div class="slider_wrapper">
        <img src="<?= $imagePath  ?>" alt="" class=" img-responsive top_slider_img">
       
        </div>
      @endforeach
 </div>
 @endisset
    
</section>
            </div>
            </div>

        </div>

             </div>
         </div>
</section>




@stop