<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('kd_guru')->nullable();
            $table->string('kd_dudi')->nullable();
            $table->string('id_jurusan')->nullable();
            $table->string('role');
            $table->string('foto')->nullable();
            //profil siswa
            $table->string('nissiswa')->nullable();
            $table->string('alamatsiswa')->nullable();
            $table->string('notlpsiswa')->nullable();
            //profil guru
            $table->string('nip')->nullable();
            $table->string('alamat')->nullable();
            $table->string('notlpn')->nullable();
            //profil dudi
            $table->string('namakepdik')->nullable();
            $table->string('alamatdudi')->nullable();
            $table->string('notelepondudi')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
