<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataabsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataabsens', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('foto')->nullable();
            $table->string('statusjurnal')->nullable();
            $table->bigInteger('usersiswa')->unsigned();
            $table->foreign('usersiswa')->references('id')->on('datasiswas')->onDelete('cascade');
            $table->string('student_id');
            $table->string('id_jurusan');
            $table->string('kd_guru');
            $table->string('kd_dudi');

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
        Schema::dropIfExists('dataabsens');
    }
}
