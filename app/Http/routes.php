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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', 'VistaController@holamundo');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('operador','operadorcontroller');

Route::get('/search', 'searchcontroller@busqueda');

Route::get('/solicitar', 'solicitarcontroller@solicitud');

Route::get('/tecnico', 'tecnicocontroller@tecnicos');

use App\User;
use Illuminate\Support\Facades\Input;

Route::get ( '/home', function () {
	return view ( 'search.indexs' );
} );
Route::post ( '/search', function () {
	$q = Input::get ( 'q' );
	$user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
	if (count ( $user ) > 0)
		return view ( 'search.indexs' )->withDetails ( $user )->withQuery ( $q );
	else
		return view ( 'search.indexs' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('books','BookController');