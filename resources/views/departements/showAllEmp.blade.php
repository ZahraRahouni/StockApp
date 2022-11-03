@extends('base')
 
@section('main')
<div class="row">
<div class="col-sm-12">
   
    
  <table class="table table-striped">
    <thead>
        <tr>

          <td> employees NAME</td>
        </tr>
    </thead>
    <tbody>
        @foreach($departements->getEmployee as $emp)
        <tr>
            <td>{{$emp->nameE}} </td>
            
           

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection