@extends('layout')
@section('title')
@if ($item->category->code !=  'service'  && $item->category->code !=  'about')
 {{ __('News') }}
 @else 
  {{  $item->category->title }}
@endif
 @endsection
@section('description') {{ __('site_name') }} @endsection
@section('content')

@php
$href = $item->url;
$date = $item->renderDateToWord($item->date_created);
// $path = $item->getThumbPath();
$path = $item->getImage();
@endphp

@if ($item->title != null && $item->content != null)
<div class="content" style="padding: 50px 0;">
    <div class="container">
        <div class="row py-lg-4 py-md-4 py-sm-0 position-relative">
           @if ($item->category->code !=  'service'  && $item->category->code !=  'about')
        <div class="news_top_title" style="margin-top: 0">
        {{ $item->title}}
      </div>
    @endif

                <div class="news-details">
                    <div class="news-details-text">
                      @if ($item->category->code ==  'about')
                        <div class="row">
                        <div class="col-md-9">
                          @if (!empty($path))
                        <div class="news-details-image_wrapper">

                            <img src="{{$item->getImage()}}" class="news-detals-image" alt="{{$item->title}}">
                         </div>
                        
                     @endif
                               <div class="news-contenta">
                                 {!! $item->content !!}
                    </div>
                        </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12 alike-content-wrapper">
                <div class="pl-3">
                    <div class="py-2 border-bottom font-weight-bold">
                      {{__('Top read')}}
                    </div>
                    @php
                    $code = '';
                      $code == 'news';
                    @endphp

               @include('common/top_news', ['popular' =>  $popular])

                    </div>
                </div> 
                </div>
                @else
@if (!empty($path))
                        <div class="news-details-image_wrapper">
                          <img src="{{$item->getImage()}}" class="news-detals-image" alt="{{$item->title}}">
                         </div>
                        
                    @endif
                 
                    <div class="news-contenta">
                      {!!$item->content!!}
                    </div>
                     @endif
                  
                </div>
            </div>
            @if ($item->category->code !=  'about' && $item->category->code !=  'service')

            <div class="news_top_title">
              {{__('Related')}}
      </div>
      <div>
                          <div class="d-flex flex-wrap">

@foreach ($related as $element)
  <div class="related-page">
            <div class="related-page-image-wrapper">
                <img src="{{$element->getImage()}}" alt="{{$element->title}}">            </div>
            <div class="bar-beneath" style="height: 0.4rem"></div>
                <div class="d-flex flex-column justify-content-between">
                    <div class="related-page-title">
                        <a href="{{route('item.show',$element->id)}}">
                         {{$element->title}}                     
                       </a>
                  </div>
              </div>
  </div>
@endforeach
                                   @include('common/similar_articles', ['category' =>  $item->category->code])
                   
                </div>
      </div>
  @endif

        </div>
        @if ($item->category->code ==  'service')

        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"> № </th>
      <th scope="col"> {{__('Vehicle type')}} </th>
      <th scope="col"> {{__('Load capacity')}} </th>
      <th scope="col"> {{__('Price per hour (manats)')}} </th></th>
    </tr>
  </thead>
  <tbody>
    @php
      $trucks = App\Models\Truck::all();
      $language = Illuminate\Support\Facades\App::currentLocale();
    @endphp
      @foreach ($trucks as $truck)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      @if ($language == 'tk')
        <td>{{$truck->truck_type_tk}}</td>
      @endif

      @if ($language == 'ru')
        <td>{{$truck->truck_type_ru}}</td>
      @endif

      @if ($language == 'en')
        <td>{{$truck->truck_type_en}}</td>
      @endif

      <td>{{$truck->capacity .' '. __('tons') }}</td>
      @if ($truck->price_hour_danger != null && $truck->price_hour_danger != $truck->price_hour_normal)
        
      <td>{!! __('Regular cargo') . ' - ' . $truck->price_hour_normal . '<br>' . __('Hazardous cargo') . ' - ' . $truck->price_hour_danger !!}</td>
      @else
        <td>{{ $truck->price_hour_normal; }}</td>
        @endif
    </tr>
 @endforeach
  </tbody>
</table>
@endif

    </div>
</div>
@endif
@endsection

