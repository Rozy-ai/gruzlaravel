

        {{-- Tabs --}}
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">TK</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ru</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">En</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

         <label>Title Tk</label></br>
        <input type="text" name="title_tk" id="title_tk" @if (!empty($item->translate('tk')->title)) value="{{$item->translate('tk')->title}}" @endif class="form-control"></br>

        <label>Description Tk</label></br>
        <input type="text" name="description_tk" id="description_tk" @if (!empty($item->translate('tk')->description)) value="{{$item->translate('tk')->description}}" @endif class="form-control"></br>

        <label>Content Tk</label></br>
        <textarea name="content_tk" id="content_tk" class="form-control"> @if (!empty($item->translate('tk')->content)) {{$item->translate('tk')->content}} @endif</textarea><br>
        
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <label>Name Ru</label></br>
        <input type="text" name="title_ru" id="title_ru" @if (!empty($item->translate('ru')->title)) value="{{$item->translate('ru')->title}}" @endif class="form-control"></br>

        <label>Description RU </label></br>
        <input type="text" name="description_ru" id="description_ru" @if (!empty($item->translate('ru')->description)) value="{{$item->translate('ru')->description}}" @endif class="form-control"></br>

        <label>Content RU</label></br>
        <textarea name="content_ru" id="content_ru" class="form-control">@if (!empty($item->translate('ru')->content)) {{$item->translate('ru')->content}} @endif</textarea><br>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
        <label>Title En</label></br>
        <input type="text" name="title_en" id="title_en" @if (!empty($item->translate('en')->title)) value="{{$item->translate('en')->title}}" @endif class="form-control"></br>

        <label>Description En</label></br>
        <input type="text" name="description_en" id="description_en" @if (!empty($item->translate('en')->description)) value="{{$item->translate('en')->description}}" @endif class="form-control"></br>

        <label>Content En</label></br>
        <textarea name="content_en" id="content_en" class="form-control">@if (!empty($item->translate('en')->content)) {{$item->translate('en')->content}} @endif</textarea><br>
        
  </div>
</div>
        <br><label>Date</label><br>
<input class="datepicker form-control" name="date_created" id="date_created" data-date-format="yyyy-mm-dd" value="{{$item->date_created}}"><br>

<br><label>Category</label><br>

<select name="category_id" class="form-select form-select-lg mb-3">
@foreach ($categories as $key => $value)
    <option value="{{ $key }}"
@if($item->category_id == $key)
{{ 'selected="selected"'}}
 @endif
    >{{ $value }}</option>
}
}
@endforeach
</select>


       @if ($item->status === 1)
          <input type="checkbox" name="status" checked="">
       @else
          <input type="checkbox" name="status" {{ old('status') ? 'checked' : '' }} >
       @endif <label>{{__('Status')}}</label><br>
        

       @if ($item->is_main === 1)
          <input type="checkbox" name="is_main" checked="">
       @else
          <input type="checkbox" name="is_main" {{ old('is_main') ? 'checked' : '' }} >
       @endif <label>Is Main</label><br>
        
       @if ($item->is_menu === 1)
          <input type="checkbox" name="is_menu" checked="">
       @else
          <input type="checkbox" name="is_menu" {{ old('is_menu') ? 'checked' : '' }} >
       @endif<label>Is Menu</label><br>



