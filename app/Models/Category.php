<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi Artikel dengan Kategori
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    // Relasi Kategori dengan User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
