<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Solicitud extends Model {
   //
    protected $fillable=[
        'name',
        'lname',
        'email',
        'servicio',
        'informacion',
        'municipio',
        'image'
    ];
}