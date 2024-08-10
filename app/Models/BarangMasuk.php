<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuks';

    protected $fillable = [
        'tanggal_masuk',
        'sumber_dana',
        'pemasok_id',
        'user_id',
    ];
}
