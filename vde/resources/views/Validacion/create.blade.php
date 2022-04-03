@extends('layouts.plantillabase')

@section('contenido')
<h2>REGISTRO ESTUDIANTES</h2>

<form action="/Validacions" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="Codigo" name="Codigo" type="text" class="form-control" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="Direccion" name="Direccion" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="Telefono" name="Telefono" type="number" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">email</label>
    <input id="email" name="email" type="text"  class="form-control" tabindex="5">
  </div>
  <a href="/Validacions" class="btn btn-outline-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-outline-primary" tabindex="4">Guardar</button>
</form>

@endsection