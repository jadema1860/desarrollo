@extends('layouts.plantilla')
@section('title','Estudiante detalle')
@section('content')
    <div class="container mt-5">
        {{$student->numeroIdentificacion}}

        <img src="/images/{{$student->foto}}">
    </div>
@endsection