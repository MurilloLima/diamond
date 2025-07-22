<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'cat_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Sms::class, 'id_diamond');
    }

    public function views()
    {
        return $this->hasMany(view::class, 'id_diamond', 'id');
    }
}
