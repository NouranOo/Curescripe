<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigIncrements('mobile');
            $table->string('password');
            $table->string('fullname');
            $table->string('email');
            $table->integer('gender_id');
            $table->string('bithday');
            $table->float('lat');
            $table->float('long');
            $table->integer('pin');
            $table->string('qr');
            $table->string('recoverySmsCode');
            $table->string('photo');
            $table->string('ApiToken');
            $table->string('Token');
            $table->integer('userType_id');
            $table->integer('isDeleted');
            $table->integer('isActive');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
