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
        Schema::create('_kamar', function (Blueprint $table) {
            $table->increments('id');
            $table->int('No_Kamar');
            $table->string('Jenis_Kamar')->nullable();
            $table->int('Lantai');
            $table->boolean('Status_Kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_kamar');
    }
};
