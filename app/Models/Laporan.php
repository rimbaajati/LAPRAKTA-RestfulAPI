<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Laporan extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'lokasi',
        'status',
        'foto',
    ];

    /**
     * Custom accessor untuk mendapatkan URL lengkap foto
     *
     * @return Attribute
     */
    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn($foto) => url('/storage/laporans/' . $foto),
        );
    }
}
