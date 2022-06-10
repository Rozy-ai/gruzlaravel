@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Categories Page</div>
  <div class="card-body">
  	      <form action="{{ url('admin/items') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @include('admin.errors')
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="common-tab" data-bs-toggle="tab" data-bs-target="#common" type="button" role="tab" aria-controls="common" aria-selected="true">Common</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="common" role="tabpanel" aria-labelledby="common-tab">
  	 @include('admin.items.form')
  	</div>
  	  <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
  	 @include('admin.items.gallery')
  	</div>
  </div>
   
           <input type="submit" id="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
 
@stop