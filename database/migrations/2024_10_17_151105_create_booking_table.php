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
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ID_Booking')->nullable();
            $table->integer('ID_User')->nullable();
            $table->integer('no_kamar')->nullable();
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->boolean('status_booking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
