<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $fillable = ['pregunta', 'respuesta1', 'respuesta2','respuesta3','respuesta4','categoria',];

    
}
