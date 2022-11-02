@extends('base')
 
@section('main')

<h2>Create product</h2>

<form action="{{ route('products.store') }}" method="POST">
          @csrf
          <div class="form-group">    
              <label for="name">Product Name:*</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">    
              <label for="price">Product Price:*</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">    
              <label for="category">Product Categories :*</label> <br>
                <select name="category_id[]" id="category_id" multiple>
                    <option value=""></option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{ $category->title }}</option>
                    @endforeach
                   
                    {{-- <option value="Electronics">Electronics</option>
                    <option value="Mobile">Mobile</option>
                    <option value="VideoGames">VideoGames</option>
                    <option value="Playstation">Playstation</option> --}}
                </select>
         </div>
          <button type="submit" class="btn btn-primary">Add Product</button>
      </form>
@endsection