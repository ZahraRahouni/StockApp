@extends('base')
 
@section('main')

<h2>Create Form</h2>

<form method="post" action="{{ route('categories.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Category Title:*</label>
              <input type="text" class="form-control" name="title"/>
          </div>
 
            <button type="submit" class="btn btn-primary">Add Category</button>
</form>
@endsection