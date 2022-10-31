@extends('base')
 
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Departements</h1>
    <div>
    <a href="{{route('departements.create')}}" class="btn btn-primary mb-3">Add Departement</a>
    </div>     
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Departement Name</td>
          <td> Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($departements as $departement)
        <tr>
            <td>{{$departement->id}}</td>
            <td>{{$departement->nameD}} </td>

           <td><button type="button" class="btn btn-warning">
            <a href="{{route('departements.edit',['id'=> $departement->id])}}">Edit</a> 
              </button><br>
                <form action="{{ route('departements.destroy', $departement->id)}}" method="post">
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