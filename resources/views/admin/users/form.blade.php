<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                 @include('admin.errors')
                <label for="">Name</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror">
                <label for="">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="inputImage"
                    class="form-control @error('email') is-invalid @enderror">
                <label for="">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="form-control @error('password') is-invalid @enderror">
                <label for="">Image</label>
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control @error('image') is-invalid @enderror">

  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
           
              </form>
