@extends('template.layout')

@section('content')


<div class="container">
    <form enctype="multipart/form-data" method="POST" action="{{ route('product.store') }}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Product Name</label>
            <input type="text" class="form-control" name="productName" >
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Description</label>
            <input type="text" class="form-control" name="description" >
            
          </div>
        
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" class="form-control" name="price" >
        </div>
    
        <div class="mb-3">
            <label  class="form-label">Product Picture</label>
            <input type="file" class="form-control" name="productPhoto" >
          </div>


          <div class="mb-3">
            <label  class="form-label">Category</label>
    
            <select name="category" id="">
                <option value="Electronics">Electronics</option>
                <option value="Clothing">Clothing</option>
            </select>
            
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection