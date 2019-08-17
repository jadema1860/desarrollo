<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    public static function municipios($id){
        return municipio::where('departamento_id','=',$id)->get();
    }
}
