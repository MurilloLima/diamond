<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

      public function diamond()
    {
        return $this->belongsTo(Diamond::class, 'id_diamond');
    }
}
