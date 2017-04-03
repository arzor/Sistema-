<?php

namespace App\Http\Controllers;

use App\User;
use App\Solicitud;
use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxSearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->get('term', '');

        $Solicitud = Solicitud::where('name', 'LIKE', '%' . $query . '%')->get();

        $data = array();
        foreach ($Solicitud as $user) {
            $data[] = array('value' => $user->name, 'id' => $user->id);
        }
        if (count($data))
            return $data;
        else

            return ['value' => 'No se encuentran resultados', 'id' => ''];
    }

     public function search(Request $request){
         $users = User::where('name','like','%'.$request->name.'%')->get();
         return \View::make('list', compact('users'));
        
    }

}
