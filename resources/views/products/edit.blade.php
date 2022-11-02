@extends('base')
 
@section('main')

<h2>Edit Form</h2>

<form method="post" action="{{ route('products.update',['id' => $product->id ]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">    
              <label for="name">Product Name:*</label>
              <input type="text" class="form-control" value="{{$product->name}}"   name="name"/>
          </div>
          <div class="form-group">    
            <label for="price">Product Price:*</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}"/>
        </div>
        <div class="form-group">    
            <label for="category_id">Product Categories:*</label><BR>
            <select name="category_id[]" id="category_id"  multiple>
              <option value=""></option>

              {{-- @foreach($product->categories as $category)
              <option value="{{$category->id}}" selected>{{$category->title}}</option>
              @endforeach --}}
              
              @foreach($categories as $category)
              <option value="{{$category->id}}" @if(in_array($category->id,$product->categories->pluck('id')->toArray())) selected @endif >{{ $category->title }}</option> 
              @endforeach
            </select>         
       </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
      </form>
@endsection