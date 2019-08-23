@extends('layouts.plantilla')
@section('title','Menu Principal')

@section('content')
<script src="/js/municipios.js"></script>
<div class="container">
    <form action="/student" class="form-group" method="POST" enctype="multipart/form-data">
     @csrf
     
     <div class="form-group">
        <label for="name">Documento</label>
        <input type="number" class="form-control" 
        name="documento"  id="documento" aria-describedby="emailHelp" placeholder="Cédula de Ciudadanía">
    </div>

     <div class="form-group">   
         <label for="departamento">Tipo Documento</label>
         <select class="form-control" name="documento_id" id="documento_id">
            @foreach ($documento as $doc)
                <option value="{{$doc->id}}">{{$doc->documento}}</option>
            @endforeach           
         </select> 
    </div>

     <div class="form-group">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" 
        name="nombres"  id="nombres" aria-describedby="emailHelp" placeholder="Nombres Estudiante">
    </div>

     <div class="form-group">
        <label for="lastname">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="emailHelp" placeholder="Apellidos Estudiante">
    </div>

    <div class="form-group">   
         <label for="departamento">Sexo</label>
         <select class="form-control" name="genero_id" id="genero_id">
            @foreach ($genero as $sex)
                <option value="{{$sex->id}}">{{$sex->sexo}}</option>
            @endforeach           
         </select> 
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" aria-describedby="emailHelp">
       
    </div>
    
    <div class="form-group">   
         <label for="departamento">Departamento</label>
         <select class="form-control" name="depaNacimiento_id" id="depaNacimiento_id">
            @foreach ($departamento as $d)
                <option value="{{$d->id}}">{{$d->departamento}}</option>
            @endforeach           
         </select> 
    </div>

     <div class="form-group">   
         <label for="Municipio">Municipio</label>
         <select class="form-control" name="munNacimiento_id" id="munNacimiento_id" placeholder="Selecciona Municipio">
         </select> 
    </div>

     <div class="form-group">
        <label for="name">Teléfono</label>
        <input type="text" class="form-control" 
        name="telefono"  id="telefono" aria-describedby="emailHelp" placeholder="Telefono Fijo">
    </div>

     <div class="form-group">
        <label for="lastname">Celular</label>
        <input type="text" class="form-control" name="celular" id="celular" aria-describedby="emailHelp" placeholder="Celular">
    </div>

       <div class="form-group">   
         <label for="departamento">Departamento</label>
         <select class="form-control" name="departamento2_id" id="departamento2_id">
            @foreach ($departamento as $d)
                <option value="{{$d->id}}">{{$d->departamento}}</option>
            @endforeach           
         </select> 
    </div>

     <div class="form-group">   
         <label for="Municipio">Municipio</label>
         <select class="form-control" name="municipio2_id" id="municipio2_id" placeholder="Selecciona Municipio">
         </select> 
    </div>

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>


    <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection