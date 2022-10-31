@extends('base')
 
@section('main')

<h2>Edit Form</h2>

<form method="post" action="{{ route('departements.update',['id' => $departement->id ]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">    
              <label for="nameD">Departement Name:*</label>
              <input type="text" class="form-control" value="{{$departement->nameD}}"   name="nameD"/>
          </div>
 
          
          <button type="submit" class="btn btn-primary">Update Departement</button>
      </form>
@endsection