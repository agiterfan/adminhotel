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
        Schema::create('jenisKamars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Jenis_Kamar')->nullable();
            $table->string('Fasilitas');
            $table->float('Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenisKamars');
    }
};
