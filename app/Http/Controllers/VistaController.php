<?php namespace App\Http\Controllers;
use App\User;
use App\Book;
use App\Municipio;
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
    $books=Book::all();
    $users=User::all();
    return view('vista.index', compact('users'));
   }
   public function edit($id)
   {
   $municipio=Municipio::All();
   $users=User::find($id);
   return view('vista.edit',compact('users','municipio'));

   }
      public function update($id)
    {
       //
       $usersUpdate=Request::all();
       $users=User::find($id);
       $users->update($usersUpdate);
       return redirect('vista');
    }
}

