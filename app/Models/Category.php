<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi Artikel dengan Kategori
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
