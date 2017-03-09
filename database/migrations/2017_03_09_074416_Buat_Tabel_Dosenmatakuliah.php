<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelDosenmatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dosen_Matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id',false,true)->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('matakuliah_id',false,true)->unsigned();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('Dosen_Matakuliah');
    }
}
