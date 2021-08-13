<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('ttl');
            $table->string('foto');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->text('pendidikan');
            $table->text('alamat');
            $table->text('organisasi');
            $table->string('bidang_keilmuan');
            $table->string('minat_penelitian');
            $table->text('mata_kuliah');
            $table->string('seo_title');
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
        Schema::dropIfExists('dosen');
    }
}
