<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Danru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi Danru dengan Regu
    public function regu(): BelongsTo
    {
        return $this->belongsTo(Regu::class);
    }
}
