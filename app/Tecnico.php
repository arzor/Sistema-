<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model {

    protected $fillable = [
 		   'name',
       'lname',
       'email',
       'servicio'
    ];
}
