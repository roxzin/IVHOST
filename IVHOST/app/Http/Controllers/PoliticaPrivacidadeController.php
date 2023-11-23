<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaPrivacidadeController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('politica-privacidade.politica-privacidade');
    }
}
