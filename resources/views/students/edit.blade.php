@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Redaguoti</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Vardas</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Adresas</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Telefonas</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <input type="submit" value="Atnaujinti" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop