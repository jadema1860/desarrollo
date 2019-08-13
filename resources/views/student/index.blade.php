@extends('layouts.plantilla')
@section('title','Menu Listado')

@section('content')
<div class="container">
        <p>Listado de estudiantes</p>
        <table>
            <tr>
                <th>Nombre</th>
            </tr>

        @foreach ($student as $est)
            <tr>
                <td>{{$est->numeroIdentificacion }}</td><td><img src="images/{{$est->foto}}"></td>
            </tr>
        @endforeach
         </table>
</div>
@endsection

