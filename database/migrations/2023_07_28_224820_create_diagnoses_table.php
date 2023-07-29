<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosesTable extends Migration
{
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();
              // Kolom-kolom relevan untuk penyimpanan data deteksi penyakit kucing
            $table->string('cat_name');
            $table->integer('age');
            $table->text('gejala_ids');
            $table->text('hasil_deteksi');
            // $table->string('nama_penyakit'); // Kolom untuk menyimpan nama penyakit
            // $table->text('penanganan'); // Kolom untuk menyimpan penanganan penyakit
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnoses');
    }
};
