<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku_adits', function (Blueprint $table) {
            $table->id('IDBuku');
            $table->string('Judul');
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->integer('TahunTerbit');
            $table->integer('JumlahStok');
            $table->integer('dendabuku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_adits');
    }
};
