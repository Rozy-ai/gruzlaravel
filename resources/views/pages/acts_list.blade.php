@extends('layout')
@section('title') {{ __('Normative legal acts') }} @endsection
@section('content')

<div class="content" style="margin-top: 80px">
    <div class="container">

                      @foreach ($items as $element)
                      @if ($element->title != null)
                         
                      
                <div class="row pb-4 my-4 pr-4">
                    <div class="col-sm-12"> 
                        
                        <div class="pb-1 pl-0" style="color: #000">
                                     @php
                                         
                                     
                                         $path = $element->getImage();
                                         
                               @endphp
                               {{$element->renderDateToWord($element->date_created)}}
                        </div>
                        <div class="news-list-title" style="color: #000">{{$element->title}}</div>
                        <div class="news-list-description"><p style="color: #000">
                    
                              {{$element->description}}
                            </p></div>
                            <p><a href="{{$path}}">{{__('Download')}}</a></p>
                    </div>
                </div>
                @endif
                  @endforeach 
                                  {{$items->links()}}
    </div>
</div>
@endsection