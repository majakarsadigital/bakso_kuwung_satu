<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';

    protected $fillable = [
        'nama_customer',
        'rating',
        'ulasan',
        'foto_customer',
        'is_featured',
        'tanggal_testimoni',
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_featured' => 'boolean',
        'tanggal_testimoni' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeRating($query, $rating)
    {
        return $query->where('rating', $rating);
    }
}
