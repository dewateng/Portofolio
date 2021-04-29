<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjam_buku', function (Blueprint $table) {
            $table->bigIncrements('id_peminjam_buku');
            $table->string('nama');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('gender');
            $table->string('umur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjam_buku');
    }
}
