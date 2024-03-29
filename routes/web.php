<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TesteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    echo '<h1>Ola mundo</h1>';
});

Route::get('/login', [TesteController::class, 'login']);

Route::get('/clientes', [ClienteController::class, 'list']);

//any significa que pode ser GET ou Post o http method
Route::any('/clientes/novo', [ClienteController::class, 'add']);

Route::get('/excluir-cliente/{id}', [ClienteController::class, 'remove']);
