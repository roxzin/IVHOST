<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LicencaController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('licenca.licenca-premium');
    }
}
