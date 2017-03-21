<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Servicio extends Model {
   //
    protected $fillable=[
        'nombre',
        'apellido',
        'correo',
        'servicio',
        'especialidad',
        'municipio',
        'image'
    ];
}