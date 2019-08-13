@extends('layouts.plantilla')
@section('title','Menu Listado')

@section('content')
<div class="container">
        <p>Listado de estudiantes</p>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Fotografia</th>
      <th scope="col">Detalle</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($student as $est)
    <tr>
      <th scope="row">{{$est->numeroIdentificacion }}</th>
      <td><img class="img-thumbnail" src="images/{{$est->foto}}"></td>
      <td><a href="/student/{{$est->id}}" class="btn btn-warning">Detalle</a></td>
      <td><button class="btn btn-warning">Editar</button></td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
@endsection

