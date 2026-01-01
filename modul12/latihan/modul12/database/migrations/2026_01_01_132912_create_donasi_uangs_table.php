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
    Schema::create('donasi_uangs', function (Blueprint $table) {
        $table->id();
        $table->string('nama_donatur');
        $table->bigInteger('jumlah');
        $table->date('tanggal');
        $table->string('keterangan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasi_uangs');
    }
};
