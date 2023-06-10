<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuFira extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'penulis', 'penerbit','tahun_terbit', 'jumlah_stok', 'denda_buku', 'kategori_id',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
