<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedagemController;
use App\Http\Controllers\RevendaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServidoresController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LicencaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PoliticaPrivacidadeController;
use App\Http\Controllers\PoliticaCookiesController;


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

// HOME
Route::match(['get'], '/{slug?}', [HomeController::class, 'index'])->where('slug', '(home)?');



// HOSPEDAGEM DE SITES
Route::get('/hospedagem-de-sites/hospedagem-premium', [HospedagemController::class, 'premium']);
Route::get('/hospedagem-de-sites/hospedagem-wordpress', [HospedagemController::class, 'wordpress']);
Route::get('/hospedagem-de-sites/hospedagem-gratis', [HospedagemController::class, 'gratis']);

// REVENDA DE HOSPEDAGEM
Route::get('/revenda-de-hospedagem/revenda-premium', [RevendaController::class, 'premium']);

// SERVIDORES
Route::get('/servidores-vps/servidores-vps-premium', [ServidoresController::class, 'premium']);

// EMAIL
Route::get('/emails/email-premium', [EmailController::class, 'premium']);

// LICENÇA
Route::get('/licencas', [LicencaController::class, 'premium']);
Route::get('/licencas/cpanel-whm', [LicencaController::class, 'premium']);
Route::get('/licencas/directadmin', [LicencaController::class, 'premium']);
Route::get('/licencas/whmcs', [LicencaController::class, 'premium']);

// LICENÇA
Route::get('/empresa/ivhost', [EmpresaController::class, 'premium']);

// POLITICAS
Route::get('/empresa/politica-de-cookies', [PoliticaCookiesController::class, 'premium']);
Route::get('/empresa/politica-de-privacidade', [PoliticaPrivacidadeController::class, 'premium']);