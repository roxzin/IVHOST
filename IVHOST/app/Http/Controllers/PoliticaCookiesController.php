<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaCookiesController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('politica-cookies.politica-cookies');
    }
}
