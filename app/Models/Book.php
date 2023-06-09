<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $primaryKey = 'IDBuku';
    
    protected $fillable = ['Judul','Penulis','Penerbit','TahunTerbit','StokBuku','dendabuku'];

    public function Category()
    {
        return $this->hasMany(Categories::class);
    }
}
