<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $fillable = ['id', 'user', 'numeropreguntas','numeroaciertos','puntos','categoria',];

    public function userObject() {
        return $this->belongsTo('\App\User', 'user');
    }

}
