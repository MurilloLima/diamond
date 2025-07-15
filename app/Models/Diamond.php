<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'slug',
        'cat_id',
        'total',
        'disponiveis',
        'vendidos',
        'tipo_anuncio',
        'desc_anuncio',
        'desc'
    ];
}
