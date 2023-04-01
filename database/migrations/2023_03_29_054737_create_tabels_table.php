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
        Schema::create('tabels', function (Blueprint $table) {
            $table->id();
            $table->string('namatransaksi');
            $table->string('tgltransaksi');
            $table->string('statustransaksi');
            $table->integer('jumlahtransaksi');
            $table->text('deskripsitransaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabels');
    }
};
