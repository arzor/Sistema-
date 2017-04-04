<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model {
   //
    protected $fillable = [
        'id',
        'nombre',
        'reputacion',
        'informacion',
        'calificacion',
        'image'
    ];
}
