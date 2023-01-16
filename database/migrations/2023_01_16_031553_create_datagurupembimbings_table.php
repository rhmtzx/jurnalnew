<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagurupembimbingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagurupembimbings', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('namagurupem');
            $table->string('alamatgurupem');
            $table->string('notlpgurupem');
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
        Schema::dropIfExists('datagurupembimbings');
    }
}
