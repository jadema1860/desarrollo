<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $fillable=['documento','nombres','apellidos','genero_id','documento_id','fechaNacimiento'];
}
