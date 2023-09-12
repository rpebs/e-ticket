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
            $table->id();
            $table->foreignId('id_registrasis');
            $table->string('kode');
            $table->string('qrcode');
            $table->string('status_kirim');
            $table->string('jml_peserta');
            $table->string('jml_scan');
            // $table->string('nama_hotel');
            // $table->string('no_kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
