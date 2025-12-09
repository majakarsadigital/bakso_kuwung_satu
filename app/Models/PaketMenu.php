<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketMenu extends Model
{
    use HasFactory;

    protected $table = 'paket_menu';

    public $timestamps = false;

    protected $fillable = [
        'paket_id',
        'menu_id',
        'jumlah',
    ];

    protected $casts = [
        'paket_id' => 'integer',
        'menu_id' => 'integer',
        'jumlah' => 'integer',
        'created_at' => 'datetime',
    ];

    public function paketHemat()
    {
        return $this->belongsTo(PaketHemat::class, 'paket_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
