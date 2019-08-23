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
        name="documento"  id="documento" aria-describedby="emailHelp" placeholder="Cédula de Ciudadanía" value="{{$student->documento}}">
    </div>

    <div class="form-group">   
         <input type="hidden" id="documento_id_text" value="{{$student->documento_id}}" />
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

    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">Eliminar</button>

</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="delete" action="/student/{{$student->id}}" class="form-group" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              {{ csrf_field() }}
              @method('DELETE')
                 Realmente desea <strong class="text text-danger">eliminar</strong> al estudiante: <b> {{$student->apellidos}}  {{$student->nombres}} </b> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">Eliminar</button>
            </div>
       </form>
    </div>
  </div>
</div>
@endsection