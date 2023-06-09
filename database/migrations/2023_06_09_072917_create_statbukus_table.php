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
        Schema::create('statbuku', function (Blueprint $table) {
            $table->id();
            $table->integer('buku_id');
            $table->date('tanggal_pinjam');
            $table->string('status_buku');
            $table->integer('denda_buku');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statbuku');
    }
};
