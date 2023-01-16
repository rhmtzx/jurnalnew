<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapembimbingdudisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapembimbingdudis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('namapemdudi');
            $table->string('alamatpemdudi');
            $table->string('notlppemdudi');
            $table->string('id_siswa');
            $table->string('id_dudi');

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
        Schema::dropIfExists('datapembimbingdudis');
    }
}
