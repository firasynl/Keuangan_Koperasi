<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hutang extends Model
{
    use HasFactory;


    protected $fillable = ['nama_kreditur', 'jenis_hutang', 'jumlah_hutang','tgl_jatuhtempo',
    ];
    
}
