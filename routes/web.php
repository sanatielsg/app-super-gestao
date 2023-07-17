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

//repassando parametros para a rota
Route::get('/contato/{nome}', function(string $nome){
    echo 'estamos aqui! '.$nome;
});

Route::get('/contato/{nome}/{categoria}', function(string $nome, string $categoria){
    echo 'estamos aqui! '.$nome. ', categoria: '.$categoria
        . ' <select><option value=1>a</option><option value=2>b</option></select>';
});