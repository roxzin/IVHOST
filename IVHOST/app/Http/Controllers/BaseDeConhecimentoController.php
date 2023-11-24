<?php

namespace App\Http\Controllers;
use App\Models\BaseDeConhecimento; // Importe o modelo do seu BaseDeConhecimento aqui

use Illuminate\Http\Request;

class BaseDeConhecimentoController extends Controller
{
    public function index(Request $request)
    {
        $search_query = $request->input('q');
        $bases = BaseDeConhecimento::getBaseDeConhecimento($search_query);

        return view('base-de-conhecimento.base-de-conhecimento', compact('bases'));
    }

    public function procurar(Request $request)
    {
        $search_query = $request->input('q');
        $bases = BaseDeConhecimento::getBaseDeConhecimento($search_query);

        return view('base-de-conhecimento.base-de-conhecimento', compact('bases'));
    }

    public function BaseDeConhecimentoInterno($titulo)
{
    $base = BaseDeConhecimento::where('titulo_slug', $titulo)->first();

    if (!$base) {
        abort(404); // Retorna página não encontrada se o base-de-conhecimento.base-de-conhecimento não existir
    }

    // Recupere bases relacionados (por exemplo, os três base-de-conhecimento.base-de-conhecimento mais recentes)
    $BasesRelacionados = BaseDeConhecimento::where('id', '!=', $base->id)->orderBy('id', 'desc')->take(3)->get();

    return view('base-de-conhecimento.base-de-conhecimento-interno', compact('base', 'BasesRelacionados'));

    
}
}