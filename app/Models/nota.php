<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nota extends Model
{
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'nota_categoria', 'nota_id', 'categoria_id');
    }
}
