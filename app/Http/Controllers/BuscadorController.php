<?php

namespace App\Http\Controllers;

use App\Solicitud;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class BuscadorController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function busqueda()
    {
        return view('buscador.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

  
      public function aceptacion(){

        $id = Request::input('id');

        $solicitud= Solicitud::find($id);

        $solicitud->activo = Request::input('activo');

        $solicitud->estatus = Request::input('estatus');

        $solicitud->id_user = Request::input('id_user');

        $solicitud->cell_number = Request::input('cell_number');

        $solicitud->correo = Request::input('correo');

        $solicitud->imagen = Request::input('imagen');

        $solicitud->update();

        return view('buscador.index');
    }
}
