<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DominiosController extends Controller
{
    public function registro_de_dominio()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('dominios.registro-de-dominios');
    }
}
