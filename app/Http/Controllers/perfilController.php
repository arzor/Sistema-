<?php

namespace App\Http\Controllers;

use App\User;
use App\Solicitud;
use Illuminate\Support\Facades\Request;

class perfilController extends Controller {

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
    $users=User::all();
        return view('perfil.index',compact('users'));
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
     * @param Request $request
     * @return Response
     */
   public function store(Request $request)
   {
      $users=$request->all(); // important!!
      User::create($users);
      return redirect('perfil');
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
   return view('perfil.show',compact('solicituds'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
       $users=User::find($id);
       return view('perfil.edit',compact('users'));
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
       $usersUpdate=Request::all();
       $users=User::find($id);
       $users->update($usersUpdate);
       return redirect('perfil');
    }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
     public function destroy($id)
    {
       User::find($id)->delete();
       return redirect('perfil');
    }
}