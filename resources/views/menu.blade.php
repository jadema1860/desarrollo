@extends('layouts.plantilla')


@section('content')

  <div class="col-sm-8">
      <h2>Listado de estudiantes</h2>

      <table>
        <thead>
          <tr>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Apellido</th>
          </tr>
        </thead>
        <tbody>
          @foreach($estudiantes as $estudiante)
          <tr>
            <td>{{$estudiante->id}}</td>
            <td>{{$estudiante->numeroIdentificacion}}</td>
            <td>{{$estudiante->codigoMatricula}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>

  </div>
  <div class="col-sm-4">
      content
  </div>
  

@endsection
