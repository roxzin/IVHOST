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
}