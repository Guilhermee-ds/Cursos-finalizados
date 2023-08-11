<?php

use Faker\Core\Number;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao meu sistema';
});
*/


//Rota principal
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']) -> name('site.index');;

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobrenos']) -> name('site.sobrenos');;

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']) -> name('site.contato');;

Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'contato']) -> name('site.contato');;

Route::get('/login',[\App\Http\Controllers\LoginController::class,'login']) -> name('site.login');;



Route::prefix('/app')->group(function (){
    Route::get('/clientes',[\App\Http\Controllers\ClientesController::class,'clientes']) -> name('app.clientes');

    Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class,'index']) -> name('app.fornecedores');

    Route::get('/produtos',[\App\Http\Controllers\ProdutosController::class,'produtos']) -> name('app.produtos');
});


Route::get('/teste/{p2}/{p1}',[\App\Http\Controllers\TesteController::class,'teste']) -> name('teste');



Route::fallback(function (){
    echo "A rota acessada não existe. <a href=".route('site.index').">Clique aqui</a> para ser redirecionado a pagina inicial";
});

