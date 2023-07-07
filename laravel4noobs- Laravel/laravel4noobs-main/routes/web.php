<?php

use \App\Http\Controllers\LoadingController;
use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Console\LangPublishCommand;
use Illuminate\Routing\Router;
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

Route::get('/', [LoadingController::class,'getLoadingPage']);
Route::get('/about', [LoadingController::class,'getAboutPage']);

