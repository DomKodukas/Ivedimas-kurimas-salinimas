@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Registracijos forma</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Vardas</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Adresas</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Telefonas</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Registruoti" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop