<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageMenu extends Model
{
    use HasFactory;

    protected $table = 'package_menus';

    protected $fillable = [
        'package_id',
        'menu_id',
        'quantity',
    ];

    protected $casts = [
        'package_id' => 'integer',
        'menu_id' => 'integer',
        'quantity' => 'integer',
        'created_at' => 'datetime',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
