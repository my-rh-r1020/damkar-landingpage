<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi User dengan Role
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    // Relasi User dengan Artikel
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    // Relasi User dengan Danru
    public function danrus(): HasMany
    {
        return $this->hasMany(Danru::class);
    }

    // Relasi User dengan Kategori
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    // Relasi User dengan Kategori
    public function regus(): HasMany
    {
        return $this->hasMany(Regu::class);
    }

    // Relasi User dengan Kategori
    public function gallerys(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
