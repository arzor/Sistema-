<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use App\Servicio;
use App\Solicitud;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {	
    $users = DB::table('users')->where('rol_tec', '=', 1)->get();
	$tecnico = DB::table('users')->where('rol_user', '=', 1)->get();
	$solicitud = DB::table('solicituds')->get();
    return view('welcome', compact('users','tecnico','solicitud'));
});

Route::get('searchajax',array('as'=>'searchajax','uses'=>'AjaxSearchController@autoComplete'));

Route::get('hola', 'VistaController@holamundo');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('regis','registrocontroller');

Route::get('/search', 'searchcontroller@busqueda');

Route::resource('tecnico','tecnicocontroller');

Route::get ( '/home', function () {
	return view ( 'search.indexs' );
} );

Route::post ( '/search', function () {
	$q = Input::get ( 'q' );
	$user = Servicio::where ( 'servicio','LIKE', '%' . $q . '%' )
	->orWhere ( 'nombre', 'LIKE', '%' . $q . '%' )->get ();

	if (count ( $user ) > 0)
		return view ( 'search.indexs' )->withDetails ( $user )->withQuery ( $q );
	else
		return view ( 'search.indexs' )->withMessage ( 'No se consiguieron resultados. Intente mas tarde !' );
} );

Route::resource('books','BookController');

Route::resource('perfil','perfilController');

Route::resource('regitec','regiteccontroller');

Route::resource('regiuser','Regiuser');

Route::resource('contactenos','contaccontroller');

Route::get('/ayuda', function () {
    return response()->view('ayuda');
});

Route::resource('servicio','ServicioController');

Route::resource('versol','VersolController');

Route::post ( '/buscador', function () {
	$q = Input::get ( 'q' );
	$user = Solicitud::where ( 'servicio','LIKE', '%' . $q . '%' )
	->orWhere ( 'name', 'LIKE', '%' . $q . '%' )->get ();

	if (count ( $user ) > 0)
		return view ( 'buscador.index' )->withDetails ( $user )->withQuery ( $q );
	else
		return view ( 'buscador.index' )->withMessage ( 'No se consiguieron resultados. Intente mas tarde !' );
} );

Route::post('calificar', "tecnicocontroller@calificar");

Route::resource('vista', "VistaController");


