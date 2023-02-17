<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatagurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datagurus', function (Blueprint $table) {
            $table->id();
            $table->string('kd_guru');
            $table->bigInteger('nip');
            $table->string('namaguru');
            $table->string('alamat');
            $table->bigInteger('notlpn');
            $table->string('user_id')->nullable();
            $table->string('foto');
            
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
        Schema::dropIfExists('datagurus');
    }
}
