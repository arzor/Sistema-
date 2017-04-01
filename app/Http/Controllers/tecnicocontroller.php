<?php

namespace App\Http\Controllers;

use App\Solicitud;
use App\Calificacion;
use App\Municipio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class tecnicocontroller extends Controller {

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
        $solicitud=Solicitud::all();
        $municipio=Municipio::All();
        return view('tecnico.index', compact('solicitud','municipio'));
    }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        $municipio=Municipio::All();
        return view('tecnico.create', compact('municipio'));
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store() {
        $solicitud=Request::all();
        Solicitud::create($solicitud);
        return redirect('tecnico');
    }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id) {
      $solicitud=Solicitud::find($id);
      return view('tecnico.show',compact('solicitud'));
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
   $solicitud=Solicitud::find($id);
   return view('tecnico.edit',compact('solicitud','municipio'));

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
   $solicitudUpdate=Request::all();
   $solicitud=Solicitud::find($id);
   $solicitud->update($solicitudUpdate);
   return redirect('tecnico');
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
   return redirect('tecnico');
   }



    public function calificar(){
        $calificacion=Request::all();
        Calificacion::create($calificacion);
        return redirect('tecnico');
        }

}
