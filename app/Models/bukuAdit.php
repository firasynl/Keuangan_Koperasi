<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuAdit extends Model
{
    use HasFactory;
    protected $fillable = ['Judul', 'Penulis','Penerbit','TahunTerbit', 'JumlahStok','dendabuku'];
    protected $table = 'buku_adits';
    public $timestamps = false;
}
