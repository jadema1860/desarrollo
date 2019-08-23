<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    public static function generos(){
        return genero::all();
    }
}
