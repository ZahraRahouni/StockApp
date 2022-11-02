@extends('base')
 
@section('main')

<h2>Edit Form</h2>

<form method="post" action="{{ route('categories.update',['id' => $category->id ]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">    
              <label for="title">Category Title:*</label>
              <input type="text" class="form-control" value="{{$category->title}}"   name="title"/>
          </div>
 
          
          <button type="submit" class="btn btn-primary">Update Category</button>
      </form>
@endsection