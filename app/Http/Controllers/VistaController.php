<?php namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class VistaController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
    $users=User::all();
        return view('vista.index',compact('users'));
   }
}

