<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importe a classe DB para usar consultas SQL

class HomeController extends Controller
{
    public function index()
    {
        // Consulta para obter os blogs
        $blogs = DB::table('blog')->orderBy('id', 'desc')->get();
        return view('home.home', ['blogs' => $blogs]);
    }
}