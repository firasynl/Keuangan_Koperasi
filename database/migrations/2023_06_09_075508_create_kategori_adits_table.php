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
        Schema::create('kategori_adits', function (Blueprint $table) {
            $table->id('IDKategori');
            $table->string('NamaKategori');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')->references('IDBuku')->on('buku_adits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_adits');
    }
};
