@extends('layouts.plantilla')
@section('title','Editar Estudiante')

@section('content')
<script src="/js/documento.js"></script>
<div class="container">
    <form action="/student/{{$student->id}}" class="form-group" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
     
     <div class="form-group">
        <label for="name">Documento</label>
        <input type="number" class="form-control" 
        name="documento"  id="documento" aria-describedby="emailHelp" placeholder="Cédula de Ciudadanía" value="{{ $student->documento}}">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">   
         <input type="hidden" id="valor" value="{{$student->documento_id}}" />
         <label for="departamento">Tipo Documento</label>
         <select class="form-control" name="documento_id" id="documento_id">
           
         </select> 
    </div>

    <div class="form-group">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" 
        name="nombres"  id="nombres" aria-describedby="emailHelp" placeholder="Nombres Estudiante" value="{{$student->nombres}}">
        
    </div>

     <div class="form-group">
        <label for="lastname">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp" placeholder="Apellidos Estudiante"  value="{{$student->apellidos}}" />
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" aria-describedby="emailHelp"  value="{{$student->fechaNacimiento}}">
    </div>

    <div class="form-group">   
         <input type="hidden" id="genero_id_text" value="{{$student->genero_id}}" />
         <label for="departamento">Sexo</label>
         <select class="form-control" name="genero_id" id="genero_id">           
         </select> 
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection