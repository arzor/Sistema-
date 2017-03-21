<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxSearchController extends Controller
{
    public function autocomplete(Request $request){
        $query = $request->get('term','');

        $users = User::where('name','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($users as $user) {
            $data[]=array('value'=>$user->name,'id'=>$user->id);
        }
        if(count($data))
            return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
