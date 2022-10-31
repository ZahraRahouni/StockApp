@extends('base')
 
@section('main')

<h2>Create Form</h2>

<form method="post" action="{{ route('departements.store') }}">
          @csrf
          <div class="form-group">    
              <label for="nameD">Departement Name:*</label>
              <input type="text" class="form-control" name="nameD"/>
          </div>
 
          <button type="submit" class="btn btn-primary">Add Departement</button>
      </form>
@endsection