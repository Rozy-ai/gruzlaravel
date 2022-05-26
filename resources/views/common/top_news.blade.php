@foreach ($popular as $element)
	<div class="news-additional-item">
                    <div class="news-additional-item-date">
                        {{$element->renderDateToWord($element->date_created)}}
                    </div>
                    <a href="{{route('item.show',$element->id)}}" class="news-additional-item-title">
                         {{$element->title}}  </a>
</div>
@endforeach
