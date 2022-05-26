@extends('layout')
@section('title') {{ __('News') }} @endsection
@section('description') {{ __('site_name') }} @endsection
@section('content')

<div class="news_content">
    <div class="container">
        <div class="row">
            <div class="pl-3">
                <br><br>
                <div class="row">
          @foreach ($items as $event)
               <div class="col-md-4">
                <a href="{{route('item.show',$event->id)}}" class="new_title_link">
                    <div class="post-wrapper">

                            <div class="post-thumbnail">
                                <img src="{{$event->getImage() }}" alt="tazelik-surat" class="new_img zoom">
                            </div>

                            <div class="post-content">
                                <div class="new_date"><b>{{$event->renderDateToWord($event->date_created) }}</b></div>

                                <h2 class="new_title">{{ $event->title }}</h2>


                            </div>

                        </div>


                </a>
                </div>
          @endforeach
       </div>
          {{$items->links()}}

     

                 
                </div>
            
        </div>
    </div>
</div>
@endsection