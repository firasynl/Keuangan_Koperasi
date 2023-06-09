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
        Schema::create('peminjaman_adits', function (Blueprint $table) {
            $table->id('IDPeminjaman');
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('peminjam_id');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalPengembalian');
            $table->decimal('Denda');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_adits');
    }
};
