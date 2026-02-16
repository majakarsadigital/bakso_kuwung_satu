<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'name',
        'price',
        'short_description',
        'photo',
        'category',
        'is_available',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_available' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function packageMenus()
    {
        return $this->hasMany(PackageMenu::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_menus', 'menu_id', 'package_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    protected $appends = ['average_rating', 'is_popular'];

    public function getAverageRatingAttribute()
    {
        return round($this->testimonials_avg_rating ?? 0, 1);
    }

    public function getIsPopularAttribute()
    {
        return
            ($this->testimonials_avg_rating ?? 0) >= 4.5 &&
            ($this->testimonials_count ?? 0) >= 5;
    }
}
