<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedagemController;
use App\Http\Controllers\RevendaController;
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
    return view('conteudo');
});
Route::get('/home', function () {
    return view('conteudo');
});


// HOSPEDAGEM DE SITES
Route::get('/hospedagem-de-sites/hospedagem-premium', [HospedagemController::class, 'premium']);
Route::get('/hospedagem-de-sites/hospedagem-wordpress', [HospedagemController::class, 'wordpress']);
Route::get('/hospedagem-de-sites/hospedagem-gratis', [HospedagemController::class, 'gratis']);

// REVENDA DE HOSPEDAGEM
Route::get('/revenda-de-hospedagem/revenda-premium', [RevendaController::class, 'premium']);


