<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dosen');
            $table->integer('jenis');
            $table->string('penulis');
            $table->string('judul');
            $table->string('tanggal_tahun');
            $table->string('nama_jurnal')->nullable();
            $table->string('publisher');
            $table->string('volume')->nullable();
            $table->string('nomor_edisi')->nullable();
            $table->string('halaman')->nullable();
            $table->string('isbn_issn')->nullable();
            $table->string('doi')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('publikasi');
    }
}
