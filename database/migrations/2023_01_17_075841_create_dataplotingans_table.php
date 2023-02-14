<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataplotingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataplotingans', function (Blueprint $table) {
            $table->id();
            $table->foreignid('namagurup');
            $table->foreignid('namasiswap');
            $table->foreignid('namadudip');
            $table->string('alamatdudip');
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
        Schema::dropIfExists('dataplotingans');
    }
}
