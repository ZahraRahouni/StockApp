@extends('base')
 
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Categories</h1>
    <div>
    <a href="{{route('categories.create')}}" class="btn btn-primary mb-3">Add Categories</a>
    </div>     
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Ctegory Title</td>
          <td> Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}} </td>
            
            <td>
              <a href="{{route('categories.edit',['id'=> $category->id])}}"class="btn btn-primary mb-3">Edit</a>

                <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> 

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection