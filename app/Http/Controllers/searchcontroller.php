<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Municipio;
use App\Solicitud;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
class searchcontroller extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitud=Solicitud::all();
        $municipio=Municipio::All();
        return view('search.indexs', compact('solicitud','municipio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function busqueda()
    {
        return view('search.indexs');

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

<<<<<<< HEAD
  public function Aceptar(){

        $id = Request::input('id');

        $servicio = Servicio::find($id);

        $servicio->estatus = Request::input('estatus');

        $servicio->id_user = Request::input('id_user');

        $servicio->update();

        return view('search.indexs');
=======
    public function search(Request $request){
         $movies = User::where('name','like','%'.$request->name.'%')->get();
         return \View::make('list', compact('movies'));
        
>>>>>>> 1452ea292672dfc07d9bfc74e7215ffffa5736ee
    }

}
