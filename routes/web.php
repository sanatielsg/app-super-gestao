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
//nesse caso os parametros são obrigatorios
Route::get('/contato/{nome}', function(string $nome){
    echo 'estamos aqui! '.$nome;
});

// Route::get('/contato/{nome}/{categoria}', function(string $nome, string $categoria){
//     echo 'estamos aqui! '.$nome. ', categoria: '.$categoria
//         . ' <select><option value=1>a</option><option value=2>b</option></select>';
// });

//tornar parametros opcionais
//basta adicionar ? no parametro
//precisa passar um valor default para a variável da função que recebe os parâmetros
// Route::get('/contato/{nome}/{categoria}/{assunto?}/{mensagem?}', 
//     function(string $nome, string $categoria, string $assunto = "assunto não informado"
//         , string $mensagem = "não informada" ){
//     echo " $nome, $categoria, $assunto, $mensagem ";
// });

//usando expressões regulares para tratar parâmetros tipados
//no exemplo se for passado qualquer coisa que não for um int, ao invés de disparar um erro,
//vai para 404 not found
Route::get('/contato/{nome}/{categoria_id}', 
    function(string $nome, 
            int $categoria_id = 1 //valor padrão se nada for passado 1
    ){
        echo "Estamos aqui: $nome, $categoria_id";
    }
)->where('categoria_id', '[0-9]+') //expressão regular, + é pelo menos 1 caractere
->where('nome','[A-Za-z]+')//nome só aceita de A a Z e pelo menos 1 caractere
;
