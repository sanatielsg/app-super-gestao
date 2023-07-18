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
// Route::get('/', 'PrincipalController@principal');

// Route::get('/sobre-nos', 'SobreNosController@sobreNos');

// Route::get('/contato', 'ContatoController@contato');

//repassando parametros para a rota
//nesse caso os parametros são obrigatorios
Route::get('/contato/{nome}', function(string $nome){
    echo 'estamos aqui! '.$nome;
});

// Route::get('/contato/{nome}/{categoria}', function(string $nome, string $categoria){
//     echo 'estamos aqui! '.$nome. ', categoria: '.$categoria
//         . ' <select><option value=1>a</option><option value=2>b</option></select>';
// });

//------------------------------------------------------------------------------------
//tornar parametros opcionais
//basta adicionar ? no parametro
//precisa passar um valor default para a variável da função que recebe os parâmetros
// Route::get('/contato/{nome}/{categoria}/{assunto?}/{mensagem?}', 
//     function(string $nome, string $categoria, string $assunto = "assunto não informado"
//         , string $mensagem = "não informada" ){
//     echo " $nome, $categoria, $assunto, $mensagem ";
// });

//------------------------------------------------------------------------------------
//usando expressões regulares para tratar parâmetros tipados
//no exemplo se for passado qualquer coisa que não for um int, ao invés de disparar um erro,
//vai para 404 not found
// Route::get('/contato/{nome}/{categoria_id}', 
//     function(string $nome, 
//             int $categoria_id = 1 //valor padrão se nada for passado 1
//     ){
//         echo "Estamos aqui: $nome, $categoria_id";
//     }
// )->where('categoria_id', '[0-9]+') //expressão regular, + é pelo menos 1 caractere
// ->where('nome','[A-Za-z]+')//nome só aceita de A a Z e pelo menos 1 caractere
// ;
//------------------------------------------------------------------------------------

// Route::get('/login', function(){return 'Login';});
// Route::get('/clientes',function(){return 'Clientes';});
// Route::get('/fornecedores', function(){return 'Fornecedores';});
// Route::get('/produtos', function(){return 'Produtos';});

//defindo agrupamento de rotas de acesso

//essa rota será acessada fora do agrupamento (acesso irrestrito)
// Route::get('/login', function(){return 'Login';});

// //estas rotas serão agrupadas e chamadas dentro do prefixo /app (acesso restrito)
// Route::prefix('/app')->group(function(){
//     Route::get('/clientes',function(){return 'Clientes';});
//     Route::get('/fornecedores', function(){return 'Fornecedores';});
//     Route::get('/produtos', function(){return 'Produtos';});
// });
//------------------------------------------------------------------------------------

//nomeação de rotas
//rotas site
//o nome da rota nomeada só funciona internamente, não funciona no endereço (get)
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

//rotas app
Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

//----------------------------------------------------------------
//redirecionamento de rota
Route::get('/rota1', function(){ echo 'Rota 1 ';})->name('site.rota1');
Route::get('/rota2', function(){ echo 'Rota 2 ';})->name('site.rota2');


//metodo 1 : redirecionando pelo redirect 
//a /rota3 redireciona pra site.rota1, que aqui redireciona para /rota2
Route::redirect('/rota1', '/rota2');

//metodo 2: chamando de dentro da função de callback
Route::get('/rota3', function(){
    return redirect()->route('site.rota1'); //aqui ele manda pra 1 (e a 1 redireciona pra 2)
})->name('site.rota3');
//-------------------------------------------------------------------
//rota de fallback - se tentar acessar uma rota inexistente
Route::fallback(function(){
    echo 'A página não existe. Clique <a href="/">aqui</a> para voltar para o início.';
});

//-------------------------------------------------------------------
//passando parametros para o controller
Route::get('/teste/{p1}/{p2}', 'TesteController@teste');

//-------------------------------------------------------------------
//passando parametros do controller para a view
/* 3 formas 
    * array associativo
    * Compact()
    * With()
 */

 //return view('site.teste'), refere-se a um arquivo teste.blade.php localizado em /resources/views/site

 //exemplo no TesteController

 //-------------------------------------------------------------------