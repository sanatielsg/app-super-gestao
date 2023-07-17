<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    //return view('welcome');
    return 'olá';
});
*/
/*
    quando passamos uma function, ele entende que é uma função de callback,
    quando passamos uma string ele entende que é um controlador e uma ação
    quando essa rota for chamada
    Controller@metodoDentroDoController
 */
Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
