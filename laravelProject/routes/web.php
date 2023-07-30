<?php

use Faker\Core\Number;
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
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);;

Route::get('/sobreNos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);;

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);;

Route::get('/login',[\App\Http\Controllers\LoginController::class,'login']);;

Route::get('/clientes',[\App\Http\Controllers\ClientesController::class,'clientes']);;

Route::get('/fornecedores',[\App\Http\Controllers\FornecedoresController::class,'fornecedores']);;

Route::get('/produtos',[\App\Http\Controllers\ProdutosController::class,'produtos']);;


//nome, categotia, assunto, mensagem

