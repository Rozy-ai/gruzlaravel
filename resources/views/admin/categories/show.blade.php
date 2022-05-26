@extends('admin.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Category Page</div>
  <div class="card-body">
        <div class="card-body">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="tk-tab" data-bs-toggle="tab" data-bs-target="#tk" type="button" role="tab" aria-controls="tk" aria-selected="true">TK</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="ru-tab" data-bs-toggle="tab" data-bs-target="#ru" type="button" role="tab" aria-controls="ru" aria-selected="false">Ru</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="en-tab" data-bs-toggle="tab" data-bs-target="#en" type="button" role="tab" aria-controls="en" aria-selected="false">En</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="tk" role="tabpanel" aria-labelledby="tk-tab">
    <br>
        <h5 class="card-title">Name :@if (!empty($category->translate('tk')->name)) {{$category->translate('tk')->name}} @endif </h5>

        <p class="card-text">Description : @if (!empty($category->translate('tk')->description)) {{$category->translate('tk')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($category->translate('tk')->alias)) {{$category->translate('tk')->alias}} @endif</p>

        <p class="card-text">Meta_description : @if (!empty($category->translate('tk')->meta_description)) {{$category->translate('tk')->meta_description}} @endif</p>

        <p class="card-text">Meta_keyword : @if (!empty($category->translate('tk')->meta_keyword)) {{$category->translate('tk')->meta_keyword}} @endif</p>
       
        </div>
         <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab">
          <br>
        <h5 class="card-title">Name :@if (!empty($category->translate('ru')->name)) {{$category->translate('ru')->name}} @endif </h5>

        <p class="card-text">Description : @if (!empty($category->translate('ru')->description)) {{$category->translate('ru')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($category->translate('ru')->alias)) {{$category->translate('ru')->alias}} @endif</p>

        <p class="card-text">Meta_description : @if (!empty($category->translate('ru')->meta_description)) {{$category->translate('ru')->meta_description}} @endif</p>

        <p class="card-text">Meta_keyword : @if (!empty($category->translate('ru')->meta_keyword)) {{$category->translate('ru')->meta_keyword}} @endif</p>
     
         </div>
         <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">
          <br>
        <h5 class="card-title">Name :@if (!empty($category->translate('en')->name)) {{$category->translate('en')->name}} @endif </h5>

        <p class="card-text">Description : @if (!empty($category->translate('en')->description)) {{$category->translate('en')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($category->translate('en')->alias)) {{$category->translate('en')->alias}} @endif</p>

        <p class="card-text">Meta_description : @if (!empty($category->translate('en')->meta_description)) {{$category->translate('en')->meta_description}} @endif</p>

        <p class="card-text">Meta_keyword : @if (!empty($category->translate('en')->meta_keyword)) {{$category->translate('en')->meta_keyword}} @endif</p>
     
         </div>
         <br>
        <p class="card-text">Code : {{ $category->code }}</p>
        <p class="card-text">Url_prefix : {{ $category->url_prefix }}</p>

                     <label>Top</label>  @if ($category->top === 1)
          <p class="card-text" style="color: green;display: inline-block;">Active</p>
       @else
         <p class="card-text" style="color: red;display: inline-block;">Inactive</p>
       @endif <br>
                       <label>{{__('Status')}} : </label> @if ($category->status === 1)
          <p class="card-text" style="color: green;display: inline-block;">Active</p>
       @else
         <p class="card-text" style="color: red;display: inline-block;">Inactive</p>
       @endif <br>

</div>
  </div>
       
    </hr>
  
  </div>
</div>
@stop