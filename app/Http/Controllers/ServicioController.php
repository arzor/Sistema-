<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Municipio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class ServicioController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        $servicio=Servicio::all();
        return view('servicio.index',compact('servicio'));
    }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
    $municipio=Municipio::All();
       return view('servicio.create',compact('municipio'));
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
  public function store()
{

  $servicio=Request::all();
   Servicio::create($servicio);
   return redirect('servicio');
}

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
  $servicio=Servicio::find($id);
   return view('servicio.show',compact('servicio'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
   $municipio=Municipio::All();
   $servicio=Servicio::find($id);
   return view('servicio.edit',compact('servicio','municipio'));

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
   $servicioUpdate=Request::all();
   $servicio=Servicio::find($id);
   $servicio->update($servicioUpdate);
   return redirect('servicio');
}
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
         Solicitud::find($id)->delete();
   return redirect('servicio');
   }

    public function __construct()
    {
        $this->middleware('compro');
    }
}
