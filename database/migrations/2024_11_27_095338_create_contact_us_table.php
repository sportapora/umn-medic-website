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
        Schema::create('contactUs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->string('nim', 15);
            $table->string('nomor_telepon', 13);
            $table->string('id_line', 20)->nullable();
            $table->string('tipe_pengajuan', 20);
            $table->string('nama_organisasi', 50);
            $table->string('jabatan', 20);
            $table->string('nama_acara', 50);
            $table->text('deskripsi_acara');
            $table->string('lokasi_acara');
            $table->date('tanggal_acara');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->integer('jumlah_tim_medis')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactUs');
    }
};
