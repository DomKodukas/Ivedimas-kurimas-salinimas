@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Asmuo</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-title"><b>Vardas :</b> {{ $students->name }}</p>
        <br>
        <p class="card-text"><b>Adresas :</b> {{ $students->address }}</p>
        <br>
        <p class="card-text"><b>Telefonas :</b> {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>