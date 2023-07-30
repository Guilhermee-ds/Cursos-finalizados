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

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);;

Route::get('/sobreNos',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);;

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);;
//nome, categotia, assunto, mensagem


Route::get('/contato/{name}/{category_id}',  
    function (
        string $name = "Desconhecido",
        int $category_id = 1, // 1 - "Informação"

        ) {
    echo "Estamos aqui:.$name - $category_id ";

    }
) -> where('category_id','[0-9]+') -> where('name','[A-Za-z]+');
