<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nissiswa');
            $table->string('namasiswa');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('alamatsiswa');
            $table->string('notlpsiswa');
            $table->string('kd_guru');
            $table->string('kd_dudi');
            $table->string('user_id')->nullable();

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
        Schema::dropIfExists('datasiswas');
    }
}
