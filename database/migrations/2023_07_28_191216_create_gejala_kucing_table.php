<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGejalaKucingTable extends Migration
{
    public function up()
    {
        Schema::create('gejala_kucing', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyakit');
            $table->text('gejala');
            $table->text('penanganan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gejala_kucing');
    }
};
