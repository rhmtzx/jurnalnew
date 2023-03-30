<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->time('masuk');
            $table->string('statusmasuk');
            $table->time('keluar')->nullable();
            $table->string('statuskeluar')->nullable();
            $table->bigInteger('usersiswa')->unsigned();
            $table->foreign('usersiswa')->references('id')->on('datasiswas')->onDelete('cascade');
            $table->string('user_id');
            $table->string('kd_guru');
            $table->string('kd_dudi');
            $table->string('id_jurusan');

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
        Schema::dropIfExists('absensis');
    }
}
