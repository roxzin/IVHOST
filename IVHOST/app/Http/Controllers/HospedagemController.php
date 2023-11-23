<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedagemController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "hospedagem-premium" aqui
        return view('hospedagem.hospedagem-premium');
    }


    public function wordpress()
    {
        // Lógica para carregar a página "hospedagem-premium" aqui
        return view('hospedagem.hospedagem-wordpress');
    }

    public function gratis()
    {
        // Lógica para carregar a página "hospedagem-premium" aqui
        return view('hospedagem.hospedagem-gratis');
    }
}

