@extends('base')
 
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Employees</h1>
    <div>
    <a href="{{route('employees.create')}}" class="btn btn-primary mb-3">Add employee</a>
    </div>     
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Employee Name</td>
          <td>Employee age</td>
          <td>Departement Id</td>
          <td> Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->nameE}} </td>
            <td>{{$employee->age}} </td>
            <td>{{$employee->getDepartement->nameD}} </td>
            <td> 
            <a href="{{route('employees.edit',['id'=> $employee->id])}}"class="btn btn-primary mb-3">Edit</a>

                <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form></td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection