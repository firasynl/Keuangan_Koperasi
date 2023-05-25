<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;

    protected $fillable = ['tgl_setoran', 'anggota_id', 'jumlah_simpanan', 'jenis_simpanan',
    ];

}
