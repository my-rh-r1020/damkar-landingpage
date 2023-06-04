<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Cara mengatasi Mass Assignment
    // 1. Fillable -> Yang dapat diisi selebihnya null
    // protected $fillable = ['cover', 'category', 'title', 'excerpt', 'bodyText', 'slug'];

    // 2. Guarded -> Nilai yang tidak bisa diisi selebihnya bisa
    protected $guarded = ['id'];

    // Relasi Artikel dengan Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
