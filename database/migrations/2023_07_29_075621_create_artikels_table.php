<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->string('penulis');
            $table->text('konten');
            $table->date('tanggal_publikasi');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    
    }
};
