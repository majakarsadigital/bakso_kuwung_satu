<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';

    protected $fillable = [
        'promo_title',
        'promo_description',
        'normal_price',
        'discount_price',
        'discount_percentage',
        'promo_photo',
        'start_date',
        'end_date',
        'is_active',
    ];

    protected $casts = [
        'normal_price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'discount_percentage' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->whereDate('start_date', '<=', now())
            ->whereDate('end_date', '>=', now());
    }

    public function scopeUpcoming($query)
    {
        return $query->where('is_active', true)
            ->whereDate('start_date', '>', now());
    }
}
