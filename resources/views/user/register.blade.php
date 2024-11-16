@extends('template.layout')

@section('content')


<div class="container">
<form enctype="multipart/form-data" method="POST" action="{{ route('task.store') }}">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
        
      </div>
      <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" required >
        
      </div>
    
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>

    <div class="mb-3">
        <label  class="form-label">Profile Picture</label>
        <input type="file" class="form-control" name="image" >
        
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

    <p>Already have an account? <a href="{{ route('login') }}" class="btn btn-info">Login here</a></p>
  </form>
</div>


@endsection