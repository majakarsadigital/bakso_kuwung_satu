<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
    use HasFactory;

    protected $table = 'warung';

    protected $fillable = [
        'nama_warung',
        'tagline',
        'cerita_singkat',
        'keunggulan',
        'alamat',
        'telepon',
        'whatsapp',
        'maps_embed',
        'foto_suasana',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
