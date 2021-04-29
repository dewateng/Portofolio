<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id_peminjaman');
            $table->unsignedBigInteger('id_peminjam_buku');
            $table->unsignedBigInteger('id_buku');
            $table->date('tanggal_peminjaman');
            $table->string('lama_meminjam');
            $table->string('jaminan');
            $table->string('keterangan')->nullable();
            $table->date('tanggal_pengembalian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
