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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ID_Payment')->nullable();
            $table->string('ID_Booking')->nullable();
            $table->string('ID_user')->nullable();
            $table->float('Total_Harga');
            $table->string('Jenis_Pembayaran');
            $table->date('Tanggal_Pembayaran');
            $table->string('Status_Pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
