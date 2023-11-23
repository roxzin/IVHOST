<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevendaController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('revenda.revenda-premium');
    }
}
