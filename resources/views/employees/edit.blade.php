@extends('base')
 
@section('main')

<h2>Edit Form</h2>

<form method="post" action="{{ route('employees.update',['id' => $employee->id ]) }}">
          @csrf
          @method('PUT')
          <div class="form-group">    
              <label for="nameE">Employee Name:*</label>
              <input type="text" class="form-control" value="{{$departement->nameE}}"   name="nameD"/>
          </div>
          <div class="form-group">    
            <label for="age">Employee Age:*</label>
            <input type="text" class="form-control" name="age" value="{{$employee->nameE}}"/>
        </div>
        <div class="form-group">    
            <label for="dept_id">Departement Id:*</label>
            <select name="dept_id" id="dept_id">
              <option value="{{$departement->nameD}}"></option>
              @foreach($departements as $departement)
              <option value="{{$departement->id}}">{{$departement->nameD}}</option>

              @endforeach
            </select>         
       </div>
        <button type="submit" class="btn btn-primary">Add Employee</button>
      </form>
@endsection