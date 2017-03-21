<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
   protected $fillable=[
        'nombre',
        'direccion',
        'municipio',
        'telefono',
        'descripcion'
    ];
}
