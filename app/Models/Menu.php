<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi_singkat',
        'foto_menu',
        'kategori',
        'is_available',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'is_available' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function paketMenus()
    {
        return $this->hasMany(PaketMenu::class);
    }

    public function paketHemats()
    {
        return $this->belongsToMany(PaketHemat::class, 'paket_menu', 'menu_id', 'paket_id')
            ->withPivot('jumlah')
            ->withTimestamps();
    }
}
