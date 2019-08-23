<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    public function estudiantes()
    {
        //return $this->hasMany('App\Estudiante');
     //   return $this->hasMany('App\Estudiante', 'documento_id', 'id');
    }
/*
    public static function documentos($id){
        return documento::where('id','=',$id)->get();
    }*/

    public static function documentos(){
        return documento::all();
    }
}
