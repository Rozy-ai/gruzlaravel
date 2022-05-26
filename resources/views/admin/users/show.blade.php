 @extends('admin.layout')
@section('content')

<div class="card text-center">
  <div class="card-header">
    User
  </div>
  <div class="card-body">
    <h5 class="card-title"> {{$user->name}}</h5>
<img class="img-thumbnail" src="{{ $user->getImage() }}" alt="{{ $user->name }}">
    <p class="card-text">Email : {{$user->email}}</p>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>



 
@stop