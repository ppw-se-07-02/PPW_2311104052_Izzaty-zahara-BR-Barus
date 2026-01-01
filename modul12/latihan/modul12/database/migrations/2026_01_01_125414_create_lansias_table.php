<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLansiasTable extends Migration
{
    public function up()
    {
        Schema::create('lansias', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['L','P']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('penyakit')->nullable();
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lansias');
    }
}
