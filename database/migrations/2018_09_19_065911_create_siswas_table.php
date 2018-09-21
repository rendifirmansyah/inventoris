<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis');
            $table->string('nik');
            $table->string('nisn');
            $table->string('nama_peserta_didik');
            $table->string('jenis_kelamin');
            $table->text('tempat_tanggal_lahir');
            $table->string('agama');
            $table->string('nama_orang_tua');
            $table->text('alamat_orang_tua');
            $table->text('nomor_ijazah');
            $table->string('tahun');
            $table->string('kelas');
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
        Schema::dropIfExists('siswas');
    }
}
