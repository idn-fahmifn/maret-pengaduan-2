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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            // siapa yang melapor
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete();
            $table->string('judul_laporan');
            $table->enum('jenis',['kerusakan', 'kehilangan'])->default('kerusakan');
            $table->datetime('tanggal_laporan');
            $table->string('dokumentasi');
            $table->enum('status', ['pending', 'diproses', 'selesai', 'ditolak'])->default('pending');
            $table->text('detail_laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
