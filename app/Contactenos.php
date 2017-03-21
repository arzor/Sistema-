<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactenos extends Model
{
   protected $fillable=[
   		'id',
        'nombre',
        'direccion',
        'municipio',
        'telefono',
        'correo',
        'descripcion'
    ];
}
