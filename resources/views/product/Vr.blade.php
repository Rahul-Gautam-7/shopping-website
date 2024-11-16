@extends('template.layout')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Product Name</th>
        <th>Desciption</th>
        <th>Category</th>
        <th>Price</th>
        <th>Product Image</th>
        
    </tr>

    @foreach ($product as $pro )
        
    <tr>
        <td>{{ $pro->productName }}</td>
        <td>{{ $pro->description }}</td>
        <td>{{ $pro->category }}</td>
        <td>{{ $pro->price }}</td>
        <td>
            <img src="{{ asset($pro->productPhoto) }}" style="width: 100px ; height:100px;" alt="image">
        </td>
        
    </tr>
    @endforeach
</table>



@endsection