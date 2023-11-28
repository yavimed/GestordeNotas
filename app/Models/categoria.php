<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public function notas()
    {
        return $this->belongsToMany(Nota::class, 'nota_categoria', 'categoria_id', 'nota_id');
    }
}
