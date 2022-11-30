<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControleTodoController;
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
    return view('acesse /inicio na url');
});
Route::get('/inicio', [ControleTodoController::class, 'inicio']);
Route::get('/criando', [ControleTodoController::class, 'criando']);
Route::post('/carregando', [ControleTodoController::class, 'carregando']);
Route::get('{id}/editando', [ControleTodoController::class, 'editando']);	
Route::post('/atualizando', [ControleTodoController::class, 'atualizando']);
Route::get('{id}/concluindo', [ControleTodoController::class, 'concluindo']);
Route::get('{id}/apagando', [ControleTodoController::class, 'apagando']);
 
