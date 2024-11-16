@extends('template.layout')

@section('content')

<div class="container">
    <form>
    
        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" required >
          @error('email')
           <div class="error">{{ $message }}</div>   
          @enderror
          
        </div>
      
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
        @error('password')
           <div class="error">{{ $message }}</div>   
          @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="{{ route('task.index') }}" class="btn btn-info">Register</a>
    </form>
  
   
</div>


@endsection