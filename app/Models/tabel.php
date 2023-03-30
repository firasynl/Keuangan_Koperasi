<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class tabel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namatransaksi',
        'tgltransaksi',
        'statustransaksi',
        'jumlahtransaksi',
        'deskripsitransaksi'
    ];

    public function scopeFilter($query)
    {
        if(request('search')) {
            return $query->where('namatransaksi', 'like', '%' . request('search') . '%')
                         ->orWhere('tanggal_masuk', 'like', '%' . request('search') . '%')
                         ->orWhere('tgltransaksi', 'like', '%' . request('search') . '%')
                         ->orWhere('statustransaksi', 'like', '%' . request('search') . '%')
                         ->orWhere('deskripsitransaksi', 'like', '%' . request('search') . '%');
        }
    }


}
