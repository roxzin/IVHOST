<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog'; // Nome da tabela

    protected $fillable = ['titulo', 'titulo_slug', 'image', 'data_hora', 'autor', 'texto']; // Campos da tabela

    // Método para buscar os blogs
    public static function getBlogs($search_query = null)
    {
        $query = self::orderBy('id', 'desc'); // Ordena por ID decrescente

        if ($search_query) {
            $query->where('titulo', 'LIKE', '%' . $search_query . '%')
                ->orWhere('texto', 'LIKE', '%' . $search_query . '%');
        }

        return $query->get();
    }



    
}
