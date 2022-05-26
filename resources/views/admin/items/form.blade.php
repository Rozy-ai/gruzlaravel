    @php
      use Carbon\Carbon;

      $currentTime = Carbon::now();
      $currentTime = $currentTime->format('Y-m-d');
    @endphp

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
        <input type="text" name="title_tk" id="title_tk" class="form-control"></br>

        <label>Description Tk</label></br>
        <input type="text" name="description_tk" id="description_tk" class="form-control"></br>

        <label>Content Tk</label></br>
        <textarea name="content_tk" id="content_tk" class="form-control"></textarea><br>
        
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <label>Name Ru</label></br>
        <input type="text" name="title_ru" id="title_ru" class="form-control"></br>

        <label>Description RU </label></br>
        <input type="text" name="description_ru" id="description_ru" class="form-control"></br>

        <label>Content RU</label></br>
        <textarea name="content_ru" id="content_ru" class="form-control"></textarea><br>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
        <label>Title En</label></br>
        <input type="text" name="title_en" id="title_en" class="form-control"></br>

        <label>Description En</label></br>
        <input type="text" name="description_en" id="description_en" class="form-control"></br>

        <label>Content En</label></br>
        <textarea name="content_en" id="content_en" class="form-control"></textarea><br>
        
  </div>
</div>
        <br><label>Date</label><br>
<input class="datepicker form-control" name="date_created" id="date_created" data-date-format="yyyy-mm-dd" value="{{$currentTime}}"><br>

<br><label>Category</label><br>

<select name="category_id" class="form-select form-select-lg mb-3">
@foreach ($categories as $key => $value)
    <option value="{{ $key }}"
@if (old("options")){{ (in_array($key, old("options")) ? "selected":"") }}@endif
    >{{ $value }}</option>
@endforeach
</select>


<input type="checkbox"
        name="status" /> <label>{{__('Status')}}</label><br>
        
<input type="checkbox"
        name="is_main" /> <label>Is Main</label><br>
        
<input type="checkbox"
        name="is_menu" /> <label>Is Menu</label><br>



