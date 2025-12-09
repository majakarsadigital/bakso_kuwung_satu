<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketHemat extends Model
{
    use HasFactory;

    protected $table = 'paket_hemat';

    protected $fillable = [
        'nama_paket',
        'deskripsi_paket',
        'harga_paket',
        'foto_paket',
        'is_active',
    ];

    protected $casts = [
        'harga_paket' => 'decimal:2',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function paketMenus()
    {
        return $this->hasMany(PaketMenu::class, 'paket_id');
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'paket_menu', 'paket_id', 'menu_id')
            ->withPivot('jumlah')
            ->withTimestamps();
    }

    public function scopeAktif($query)
    {
        return $query->where('is_active', true);
    }
}
