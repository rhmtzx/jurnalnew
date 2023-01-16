<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapersyaratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapersyaratans', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->string('fotopersyaratan');
            $table->string('filepersyaratan');
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
        Schema::dropIfExists('datapersyaratans');
    }
}