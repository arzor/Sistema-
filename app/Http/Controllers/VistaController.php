<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VistaController extends Controller
{
   public function holamundo()
    {
     return view('statics.holamundo');
    }
}

