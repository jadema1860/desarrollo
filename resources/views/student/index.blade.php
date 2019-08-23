@extends('layouts.plantilla')
@section('title','Menu Listado')

@section('content')
<div class="container">
        <p>Listado de estudiantes</p>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fotografia</th>
      <th scope="col">Documentos</th>
      <th scope="col">Apellidos y Nombres</th>      
      <th scope="col">Contacto</th>
      <th scope="col">Detalle</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($student as $est)
    <tr>
      <td><img class="foto" src="images/{{$est->foto}}"></td>
      <td scope="row">{{$est->documento }}</td>
      <td scope="row">{{$est->apellidos }} {{$est->nombres }}</td>
      <td scope="row">{{$est->celular }} </td>
      <td><a href="/student/{{$est->id}}" class="btn btn-primary">Detalle</a></td>
      <td><a href="/student/{{$est->id}}/edit" class="btn btn-warning">Editar</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
@endsection

