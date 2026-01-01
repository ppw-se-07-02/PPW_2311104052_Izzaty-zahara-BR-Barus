<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasisTable extends Migration
{
    public function up()
    {
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donatur');
            $table->decimal('jumlah',12,2);
            $table->date('tanggal_donasi');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasis');
    }
}
