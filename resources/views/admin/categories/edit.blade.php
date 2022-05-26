@extends('admin.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('/admin/categories/' .$category->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        @include('admin.errors')
        <input type="hidden" name="id" id="id" value="{{$category->id}}" id="id" />
         <label>Name Tk</label></br>
        <input type="text" name="name_tk" id="name_tk" @if (!empty($category->translate('tk')->name)) value="{{$category->translate('tk')->name}}" @endif class="form-control"></br>

        <label>Name Ru</label></br>
        <input type="text" name="name_ru" id="name_ru" @if (!empty($category->translate('ru')->name)) value="{{$category->translate('ru')->name}}" @endif class="form-control"></br>

        <label>Name En</label></br>
        <input type="text" name="name_en" id="name_en" @if (!empty($category->translate('en')->name)) value="{{$category->translate('en')->name}}" @endif class="form-control"></br>

        <label>Description Tk</label></br>
        <input type="text" name="description_tk" id="description_tk" @if (!empty($category->translate('tk')->description)) value="{{$category->translate('tk')->description}}" @endif class="form-control"></br>
        <label>Description RU </label></br>
        <input type="text" name="description_ru" id="description_ru" @if (!empty($category->translate('ru')->description)) value="{{$category->translate('ru')->description}}" @endif class="form-control"></br>
        <label>Description En</label></br>
        <input type="text" name="description_en" id="description_en" @if (!empty($category->translate('en')->description)) value="{{$category->translate('en')->description}}" @endif class="form-control"></br>

        <label>alias Tk</label></br>
        <input type="text" name="alias_tk" id="alias_tk"  @if (!empty($category->translate('tk')->alias)) value="{{$category->translate('tk')->alias}}" @endif class="form-control"></br>
        <label>alias RU </label></br>
        <input type="text" name="alias_ru" id="alias_ru" @if (!empty($category->translate('ru')->alias)) value="{{$category->translate('ru')->alias}}" @endif class="form-control"></br>
        <label>alias En</label></br>
        <input type="text" name="alias_en" id="alias_en" @if (!empty($category->translate('en')->alias)) value="{{$category->translate('en')->alias}}" @endif class="form-control"></br>

        <label>meta_description Tk</label></br>
        <input type="text" name="meta_description_tk" id="address_tk" @if (!empty($category->translate('tk')->meta_description)) value="{{$category->translate('tk')->meta_description}}" @endif class="form-control"></br>
        <label>meta_description RU </label></br>
        <input type="text" name="meta_description_ru" id="address_ru" @if (!empty($category->translate('ru')->meta_description)) value="{{$category->translate('ru')->meta_description}}" @endif class="form-control"></br>
        <label>meta_description En</label></br>
        <input type="text" name="meta_description_en" id="address_en" @if (!empty($category->translate('en')->meta_description)) value="{{$category->translate('en')->meta_description}}" @endif class="form-control"></br>

        <label>meta_keyword Tk</label></br>
        <input type="text" name="meta_keyword_tk" id="address_tk" @if (!empty($category->translate('tk')->meta_description)) value="{{$category->translate('tk')->meta_keyword}}" @endif class="form-control"></br>
        <label>meta_keyword RU </label></br>
        <input type="text" name="meta_keyword_ru" id="address_ru" @if (!empty($category->translate('ru')->meta_description)) value="{{$category->translate('ru')->meta_keyword}}" @endif class="form-control"></br>
        <label>meta_keyword En</label></br>
        <input type="text" name="meta_keyword_en" id="address_en" @if (!empty($category->translate('en')->meta_description)) value="{{$category->translate('en')->meta_keyword}}" @endif class="form-control"></br>

        <label>Code</label></br>
        <input type="text" name="code" id="code" value="{{$category->code}}" class="form-control"></br>
        <label>Url prefix</label></br>

        <input type="text" name="url_prefix" id="url_prefix" value="{{$category->url_prefix}}" class="form-control"></br>
       @if ($category->top === 1)
          <input type="checkbox" name="top" checked="">
       @else
          <input type="checkbox" name="top" {{ old('top') ? 'checked' : '' }} >
       @endif <label>Top</label><br>

               @if ($category->status === 1)
          <input type="checkbox" name="status" checked="">
       @else
          <input type="checkbox" name="status" {{ old('status') ? 'checked' : '' }} >
       @endif <label>{{__('Status')}}</label><br>
        




        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop