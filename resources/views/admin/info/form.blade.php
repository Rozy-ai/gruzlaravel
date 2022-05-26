         @if (empty($info)) 
          <form action="{{ url('admin/info') }}" method="POST">
            {!! csrf_field() !!}
        <input type="hidden" name="id" id="id" value="1" id="id" />
         @else 
              <form action="{{ url('admin/info/update') }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        @endif
        @include('admin.errors')
        <label>My Title</label></br>
        <input type="text" name="my_title" id="my_title" @if (!empty($info->my_title)) value="{{$info->my_title}}" @endif class="form-control"></br>
        <label>My Description</label></br>
        <textarea name="my_description" id="my_description" class="form-control"> @if (!empty($info->my_description)) {{$info->my_description}} @endif</textarea><br>
        <label>My Email</label></br>
        <input type="email" name="my_email" id="my_email" @if (!empty($info->my_email)) value="{{$info->my_email}}" @endif class="form-control"></br>
        <label>My Phone</label></br>
        <input type="phone" name="my_phone" id="my_phone" @if (!empty($info->my_phone)) value="{{$info->my_phone}}" @endif class="form-control"></br>
         <label>My Address</label></br>
        <input type="text" name="my_address" id="my_address" @if (!empty($info->my_address)) value="{{$info->my_address}}" @endif class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>