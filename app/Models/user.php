<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $fillable = ['id_users','nama', 'no_telp','kategori_users'];
    protected $table = 'user';
    public $timestamps = false;


}