<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function premium()
    {
        // Lógica para carregar a página "revenda-premium" aqui
        return view('email.email-premium');
    }
}
