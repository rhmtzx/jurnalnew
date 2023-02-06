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
            $table->string('foto');
            $table->string('statusjurnal')->nullable();
            $table->string('usersiswa');
            $table->string('student_id');
            $table->string('kd_guru');

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
