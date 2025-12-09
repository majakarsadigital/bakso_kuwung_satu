<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $fillable = [
        'customer_name',
        'rating',
        'review',
        'customer_photo',
        'is_featured',
        'testimonial_date',
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_featured' => 'boolean',
        'testimonial_date' => 'datetime',
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

    public function scopeLatest($query)
    {
        return $query->orderBy('testimonial_date', 'desc');
    }
}
