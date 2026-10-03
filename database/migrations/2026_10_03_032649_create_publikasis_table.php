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
        Schema::create('publikasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nomor_katalog', 50)->nullable();
            $table->date('tanggal_rilis');
            $table->string('frekuensi_terbit', 50)->nullable();
            $table->string('bahasa', 100)->nullable();
            $table->string('ukuran_file', 20)->nullable();
            $table->string('sampul')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasis');
    }
};
