<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxSearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->get('term', '');

        $users = User::where('name', 'LIKE', '%' . $query . '%')->get();

        $data = array();
        foreach ($users as $user) {
            $data[] = array('value' => $user->name, 'id' => $user->id);
        }
        if (count($data))
            return $data;
        else
<<<<<<< HEAD
            return ['value' => 'No se encuentran resultados', 'id' => ''];
    }

=======
            return ['value' => 'No Result Found', 'id' => ''];
    }

     public function search(Request $request){
         $users = User::where('name','like','%'.$request->name.'%')->get();
         return \View::make('list', compact('users'));
        
    }


>>>>>>> 1452ea292672dfc07d9bfc74e7215ffffa5736ee
}
