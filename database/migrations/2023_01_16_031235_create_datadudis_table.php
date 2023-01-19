<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadudisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadudis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('namadudi');
            $table->string('namakepdik');
            $table->string('namadatapembimbing');
            $table->string('alamatdudi');
            $table->string('emaildudi');
            $table->string('persyaratan');
            $table->string('slotdudi');

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
        Schema::dropIfExists('datadudis');
    }
}
