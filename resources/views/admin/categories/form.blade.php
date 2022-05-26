      <form action="{{ url('admin/categories') }}" method="post">
        {!! csrf_field() !!}
        @include('admin.errors')
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

         <label>Name Tk</label></br>
        <input type="text" name="name_tk" id="name_tk" class="form-control"></br>

        <label>Description Tk</label></br>
        <input type="text" name="description_tk" id="description_tk" class="form-control"></br>

        <label>alias Tk</label></br>
        <input type="text" name="alias_tk" id="alias_tk" class="form-control"></br>

        <label>meta_description Tk</label></br>
        <input type="text" name="meta_description_tk" id="meta_description_tk" class="form-control"></br>

        <label>meta_keyword Tk</label></br>
        <input type="text" name="meta_keyword_tk" id="meta_keyword_tk" class="form-control"></br>
        
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <label>Name Ru</label></br>
        <input type="text" name="name_ru" id="name_ru" class="form-control"></br>

        <label>Description RU </label></br>
        <input type="text" name="description_ru" id="description_ru" class="form-control"></br>

        <label>alias RU </label></br>
        <input type="text" name="alias_ru" id="alias_ru" class="form-control"></br>

        <label>meta_description RU </label></br>
        <input type="text" name="meta_description_ru" id="meta_description_ru" class="form-control"></br>

        <label>meta_keyword RU </label></br>
        <input type="text" name="meta_keyword_ru" id="meta_keyword_ru" class="form-control"></br>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
        <label>Name En</label></br>
        <input type="text" name="name_en" id="name_en" class="form-control"></br>

        <label>Description En</label></br>
        <input type="text" name="description_en" id="description_en" class="form-control"></br>

        <label>alias En</label></br>
        <input type="text" name="alias_en" id="alias_en" class="form-control"></br>


        <label>meta_description En</label></br>
        <input type="text" name="meta_description_en" id="meta_description_en" class="form-control"></br>


        <label>meta_keyword En</label></br>
        <input type="text" name="meta_keyword_en" id="meta_keyword_en" class="form-control"></br>
        
  </div>
</div>
        <label>Code</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>Url prefix</label></br>
        <input type="text" name="url_prefix" id="url_prefix" class="form-control"></br>
<input type="checkbox"
        name="top" /> <label>Top</label><br>
        
<input type="checkbox"
        name="status" /> <label>{{__('Status')}}</label><br><br>
        

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>