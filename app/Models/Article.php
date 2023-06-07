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
    protected $with = ['category'];

    // Relasi Artikel dengan Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi Artikel dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Filter Pencarian Berita
    public function scopeFilter($query, array $filters)
    {
        // v1 Searching -> Simple
        // if (request('search')) {
        //     return $query->where('title', 'like', '%' . request('search') . '%')->orWhere('content_text', 'like', '%' . request('search') . '%');
        // }

        // v2 Searching
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('content_text', 'like', '%' . $filters['search'] . '%');
        // }

        // v3 Searching with Arrow Function
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')->orWhere('content_text', 'like', '%' . $search . '%')
        )->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) => $query->where('slug', $category)
            )
        );

        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     return $query->where('title', 'like', '%' . $search . '%')->orWhere('content_text', 'like', '%' . $search . '%');
        // })->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
    }
}
