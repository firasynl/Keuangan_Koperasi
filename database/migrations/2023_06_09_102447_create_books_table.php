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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('IDBuku');
            $table->string('Judul');
            $table->string('Penulis');
            $table->string('Penerbit');
            $table->date('TahunTerbit');
            $table->bigInteger('StokBuku');
            $table->bigInteger('dendabuku');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('IDKategori');
            $table->unsignedInteger('id_buku');
            $table->string('NamaKategori');
            $table->timestamps();
            $table->foreign('id_buku')
                ->references('IDBuku')
                ->on('books')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
