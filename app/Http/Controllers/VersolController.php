<?php namespace App\Http\Controllers;
use App\Solicitud;
use App\Municipio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class VersolController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
    $solicitud=Solicitud::all();
        return view('versol.index',compact('solicituds'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
      //
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {

   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
    $solicituds=Solicitud::find($id);
   return view('versol.show',compact('solicituds'));
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
 public function __construct()
    {
        $this->middleware('compro');
    }
}