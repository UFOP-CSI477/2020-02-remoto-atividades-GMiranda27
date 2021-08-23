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

Route::get('/calendario', 'App\Http\Controllers\Controller@calendario');
Route::resource('/controle', App\Http\Controllers\ControleController::class);
Route::get('/cronometro', 'App\Http\Controllers\Controller@cronometro');
Route::resource('/cards', App\Http\Controllers\CardsController::class);