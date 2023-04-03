<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_laporan',
        'nama_laporan',
        'tgl_laporan',
        'jenis_laporan',

    ];
    protected $table = 'laporans';
    public $timestamps = false;

}
