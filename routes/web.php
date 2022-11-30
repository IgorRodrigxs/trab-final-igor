<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
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
Route::get('/',
 [ListaController::class, 'home']);

Route::get('/home',
 [ListaController::class, 'home']);
Route::get('/criar',
 [ListaController::class, 'criar']);
Route::get('/carregar',
 [ListaController::class, 'carregar']);
Route::get('/{id}/editar',
 [ListaController::class, 'editar']);
Route::patch('/atualizar',
 [ListaController::class, 'atualizar']);
Route::get('/{id}/completa',
 [ListaController::class, 'completa']);
Route::get('/{id}/deletar',
 [ListaController::class, 'deletar']);

