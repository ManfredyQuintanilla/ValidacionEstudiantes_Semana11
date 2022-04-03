@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR ESTUDIANTES</h2>

<form action="/Validacions/{{$Validacion->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$Validacion->Nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="Codigo" name="Codigo" type="text" class="form-control" value="{{$Validacion->Codigo}}">      
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="Direccion" name="Direccion" type="text" class="form-control" value="{{$Validacion->Direccion}}">   
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="Telefono" name="Telefono" type="number" class="form-control" value="{{$Validacion->Telefono}}">   
  </div>
  <div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="text"  class="form-control" value="{{$Validacion->email}}">   
  </div>
  <a href="/Validacions" class="btn btn-outline-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-outline-primary" tabindex="4">Guardar</button>
</form>

@endsection