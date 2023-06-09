<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'judul' => 'Habis Terbit',
            'penulis' => 'Kartojoyo',
            'penerbit' => 'blackmorses',
            'tahun_terbit' => '2020',
            'jumlah_stok' => '100',
            'denda_buku' => '1000',
        ]);
    }
}
