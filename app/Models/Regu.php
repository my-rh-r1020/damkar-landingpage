<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi Regu dengan Danru
    public function danrus(): HasMany
    {
        return $this->hasMany(Danru::class);
    }

    // Relasi Regu dengan User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
