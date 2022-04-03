@extends('layouts.plantillabase')

@section('contenido')
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="Validacions/create" class="btn btn-warning" type="button">CREAR</a>
</div>

<table class="table table-success table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Código</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
        @foreach ($Validacions as $Validacion)
        <tr>
            <td>{{$Validacion->Nombre}}</td>
            <td>{{$Validacion->Codigo}}</td>
            <td>{{$Validacion->Direccion}}</td>
            <td>{{$Validacion->Telefono}}</td>
            <td>{{$Validacion->email}}</td>

            <td>
                <form action="{{ route ('Validacions.destroy',$Validacion->id)}}" method="POST">
                    <a href="/Validacions/{{ $Validacion->id}}/edit" class="btn btn btn-outline-success">Editar</a>         
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Borrar</button>    
                </form>     
            </td>        
        </tr>
        @endforeach
    </tbody>

</table>

@endsection