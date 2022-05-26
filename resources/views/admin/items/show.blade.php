@extends('admin.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Item Page</div>
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
        <h5 class="card-title">Name :@if (!empty($item->translate('tk')->title)) {{$item->translate('tk')->title}} @endif </h5>

        <p class="card-text">Description : @if (!empty($item->translate('tk')->description)) {{$item->translate('tk')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($item->translate('tk')->content)) {{$item->translate('tk')->content}} @endif</p>



       
        </div>
         <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="ru-tab">
          <br>
        <h5 class="card-title">Name :@if (!empty($item->translate('ru')->title)) {{$item->translate('ru')->title}} @endif </h5>

        <p class="card-text">Description : @if (!empty($item->translate('ru')->description)) {{$item->translate('ru')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($item->translate('ru')->content)) {{$item->translate('ru')->content}} @endif</p>
     
         </div>
         <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en-tab">
          <br>
        <h5 class="card-title">Name :@if (!empty($item->translate('en')->title)) {{$item->translate('en')->title}} @endif </h5>

        <p class="card-text">Description : @if (!empty($item->translate('en')->description)) {{$item->translate('en')->description}} @endif</p>

        <p class="card-text">Alias : @if (!empty($item->translate('en')->content)) {{$item->translate('en')->content}} @endif</p>
     
         </div>
         <br>
               <label>{{__('Status')}} : </label> @if ($item->status === 1)
          <p class="card-text" style="color: green;display: inline-block;">Active</p>
       @else
         <p class="card-text" style="color: red;display: inline-block;">Inactive</p>
       @endif <br>

                     <label>Is Main</label>  @if ($item->is_main === 1)
          <p class="card-text" style="color: green;display: inline-block;">Active</p>
       @else
         <p class="card-text" style="color: red;display: inline-block;">Inactive</p>
       @endif <br>


               <label>Is Menu</label>        @if ($item->is_menu === 1)
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