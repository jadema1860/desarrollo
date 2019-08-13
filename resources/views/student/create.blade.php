@extends('layouts.plantilla')
@section('title','Menu Principal')

@section('content')
<div class="container">
    <form action="/student" class="form-group" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
        <label for="name">Nombres</label>
        <input type="text" class="form-control" 
        name="numeroIdentificacion"  id="name" aria-describedby="emailHelp" placeholder="Nombres Estudiante">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

     <div class="form-group">
        <label for="lastname">Apellidos</label>
        <input type="text" class="form-control" name="codigoMatricula" id="lastname" aria-describedby="emailHelp" placeholder="Apellidos Estudiante">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="number" class="form-control" name="idEstadoMatricula" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection