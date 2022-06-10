 @extends('admin.layout')
@section('content')
    <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
    <form method="post" id="dropzoneForm" action="{{route('dropzone.store')}}" enctype="multipart/form-data" 
                  class="dropzone dz-clickable" id="dropzone">
    @csrf
    <div>
    	<h3 class="text-center">
    		Upload Image By Click On Box
    	</h3>
    </div>
    <div class="de-default dz-message"><span>Drop files here to upload</span></div>
</form>   

@stop