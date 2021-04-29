<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->foreign('id_peminjam_buku')->references('id_peminjam_buku')->on('peminjam_buku');
            $table->foreign('id_buku')->references('id_buku')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropForeign(['id_peminjam_buku']);
            $table->dropForeign(['id_buku']);
            $table->dropColumn(['id_peminjam_buku']);
            $table->dropColumn(['id_buku']);
        });
    }
}
