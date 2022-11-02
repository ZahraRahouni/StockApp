@extends('base')
 
@section('main')

<h2>Create Form</h2>

<form action="{{ route('employees.store') }}" method="POST">
          @csrf
          <div class="form-group">    
              <label for="nameE">Employee Name:*</label>
              <input type="text" class="form-control" name="nameE"/>
          </div>
          <div class="form-group">    
              <label for="age">Employee Age:*</label>
              <input type="text" class="form-control" name="age"/>
          </div>
          <div class="form-group">    
              <label for="dept_id">Departement :*</label>
              <select name="dept_id" id="dept_id">
                <option value=""></option>
                @foreach($departements as $departement)
                <option value="{{$departement->id}}">{{$departement->nameD}}</option>
                @endforeach
              </select>         
         </div>
          <button type="submit" class="btn btn-primary">Add Employee</button>
      </form>
@endsection