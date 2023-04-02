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
        Schema::create('investasis', function (Blueprint $table) {
            $table->id('id_investasi')->unique();
            $table->date('tanggal');
            $table->bigInteger('nilai_investasi');
            $table->enum('jenis_investasi', ['Saham', 'Obligasi', 'Reksa Dana']);
            $table->string('nama_investor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investasis');
    }
};
