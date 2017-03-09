<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelJadwalmataKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jadwal_MataKuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id',false,true)->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ruangan_id',false,true)->unsigned();
            $table->foreign('ruangan_id')->references('id')->on('ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('dosen_matakuliah_id',false,true)->unsigned();
            $table->foreign('dosen_matakuliah_id')->references('id')->on('dosen_matakuliah')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('Jadwal_MataKuliah');
    }
}
