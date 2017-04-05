<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServicioAceptadaController extends Controller {

    public function __construct()
    {
        $this->middleware('compro');
    }

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        //if (Auth::user()-> ...)
        $activos = DB::table('solicituds')->where('activo', '=', 1)->get();
        return view('solicitudaceptada.index', compact('activos'));
    }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
      
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store() {
        
    }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id) {
  
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {

   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
{
   //

}
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {

   }


}
