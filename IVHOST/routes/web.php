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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BaseDeConhecimentoController;
use App\Http\Controllers\DominiosController;


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


// DOMINIOS
Route::get('/dominios/registro-de-dominios', [DominiosController::class, 'registro_de_dominio'])->name('dominios.registro-de-dominios');

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

// BLOG
Route::get('/blog', [BlogController::class, 'index'])->name('blog.blog');
Route::get('/blog/procurar', [BlogController::class, 'procurar'])->name('blog.procurar');
Route::get('/blog/{titulo}', [BlogController::class, 'blogInterno'])->name('blog.blog-interno');

// BASE DE CONHECIMENTO
Route::get('/base-de-conhecimento', [BaseDeConhecimentoController::class, 'index'])->name('base-de-conhecimento.base-de-conhecimento');
Route::get('/base-de-conhecimento/{titulo}', [BaseDeConhecimentoController::class, 'BaseDeConhecimentoInterno'])->name('base-de-conhecimento.base-de-conhecimento-interno');

// REDIRECIONAMENTOS
Route::get('/dominios/transferir', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=add&domain=transfer');
});
Route::get('/dominios/registrar', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=add&domain=register');
});
Route::get('/fale-conosco', function () {
    return redirect()->away('https://painel.ivhost.com.br/submitticket.php?step=2&deptid=1');
});

// REDIRECIONAMENTOS HOSPEDAGEM
Route::get('/hospedagem-de-sites/assinar/hospedagem-premium/basica', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/hospedagem-premium/basico');
});
Route::get('/hospedagem-de-sites/assinar/hospedagem-premium/avancada', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/hospedagem-premium/avancada');
});
Route::get('/hospedagem-de-sites/assinar/hospedagem-premium/pro', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/hospedagem-premium/pro');
});

// REDIRECIONAMENTOS REVENDA
Route::get('/revenda-de-hospedagem/assinar/revenda-premium/basica', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/revenda-premium/basica');
});
Route::get('/revenda-de-hospedagem/assinar/revenda-premium/avancada', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/revenda-premium/avancada');
});
Route::get('/revenda-de-hospedagem/assinar/revenda-premium/pro', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/revenda-premium/pro-1');
});

// REDIRECIONAMENTOS SERVIDORES
Route::get('/servidores-vps/servidores-vps-premium/basico', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=confproduct&i=0');
});
Route::get('/servidores-vps/servidores-vps-premium/avancado', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=confproduct&i=1');
});
Route::get('/servidores-vps/servidores-vps-premium/pro', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=confproduct&i=2');
});


// REDIRECIONAMENTOS EMAILS
Route::get('/emails/email-premium/basico', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/emails-premium/basico');
});
Route::get('/emails/email-premium/avancado', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/emails-premium/avancado');
});
Route::get('/emails/email-premium/pro', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/emails-premium/pro');
});


// REDIRECIONAMENTOS LICENÇAS
Route::get('/assinar/licencas/cpanel', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=confproduct&i=0');
});
Route::get('/assinar/licencas/whmcs', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/licencas/whmcs');
});
Route::get('/assinar/licencas/directadmin', function () {
    return redirect()->away('https://painel.ivhost.com.br/cart.php?a=confproduct&i=1');
});

Route::get('/assinar/hospedagem-de-sites/hospedagem-gratis', function () {
    return redirect()->away('https://painel.ivhost.com.br/index.php?rp=/store/hospedagem-grtis/gratis');
});




// EMAIL TEMPORARIO
Route::get('/base-de-conhecimento', [BaseDeConhecimentoController::class, 'index'])->name('base-de-conhecimento.base-de-conhecimento');
Route::get('/base-de-conhecimento/{titulo}', [BaseDeConhecimentoController::class, 'BaseDeConhecimentoInterno'])->name('base-de-conhecimento.base-de-conhecimento-interno');




