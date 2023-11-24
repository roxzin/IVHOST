<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseDeConhecimento extends Model
{
    use HasFactory;

    protected $table = 'base_de_conhecimento'; // Nome da tabela

    protected $fillable = ['titulo', 'titulo_slug', 'image', 'data_hora', 'autor', 'texto']; // Campos da tabela

    // Método para buscar os getBaseDeConhecimento
    public static function getBaseDeConhecimento($search_query = null)
    {
        $query = self::orderBy('id', 'desc'); // Ordena por ID decrescente

        if ($search_query) {
            $query->where('titulo', 'LIKE', '%' . $search_query . '%')
                ->orWhere('texto', 'LIKE', '%' . $search_query . '%');
        }

        return $query->get();
    }



    
}
