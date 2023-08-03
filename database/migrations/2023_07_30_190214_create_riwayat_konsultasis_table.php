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
        Schema::create('riwayat_konsultasis', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');
            $table->integer('age');
            $table->string('gejala_ids');
            $table->text('hasil_deteksi');
            $table->string('nama_penyakit')->nullable(); // Tambahkan kolom 'nama_penyakit' dengan nullable
            $table->text('penanganan')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_konsultasis');
    }
};
