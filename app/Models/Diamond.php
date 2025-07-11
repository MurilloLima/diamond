<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    use HasFactory;

     public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'cat_id', 'id');
    }
}
