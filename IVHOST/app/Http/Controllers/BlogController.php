<?php

namespace App\Http\Controllers;
use App\Models\Blog; // Importe o modelo do seu blog aqui

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search_query = $request->input('q');
        $blogs = Blog::getBlogs($search_query);

        return view('blog.blog', compact('blogs'));
    }

    public function procurar(Request $request)
    {
        $search_query = $request->input('q');
        $blogs = Blog::getBlogs($search_query);

        return view('blog.blog', compact('blogs'));
    }

    public function blogInterno($titulo)
{
    $blog = Blog::where('titulo_slug', $titulo)->first();

    if (!$blog) {
        abort(404); // Retorna página não encontrada se o blog não existir
    }

    // Recupere blogs relacionados (por exemplo, os três blogs mais recentes)
    $blogsRelacionados = Blog::where('id', '!=', $blog->id)->orderBy('id', 'desc')->take(3)->get();

    return view('blog.blog-interno', compact('blog', 'blogsRelacionados'));

    
}

}