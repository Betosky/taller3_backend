<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->usuario();
});

//Nueva ruta para el login
Route::post('/login', 'AuthController@userAuth');

Route::group(['middleware' => ['jwt.auth']], function () {

	Route::apiResource('Usuario','UsuarioController');
	Route::apiResource('Noticia','NoticiaController');
	Route::apiResource('Categoria','CategoriaController');
});

