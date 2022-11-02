
@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Products</h1>
    <div>
    <a href="{{route('products.create')}}" class="btn btn-primary mb-3">Add product</a>
    </div>     
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Product Name</td>
          <td>Product Price</td>
          <td>Product Categories</td>
          <td> Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}} </td>
            <td>{{$product->price}} </td>
            <td>
            @foreach($product->categories as $category)
              --{{$category->title}}

            @endforeach
          </td>
            <td> 
              <a href="{{route('products.edit',['id'=> $product->id])}}"class="btn btn-primary mb-3">Edit</a>
              <br>
              <form action="{{ route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
              </form></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection