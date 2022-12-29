<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255)->nullable(false)->unique();
            $table->string('password', 255)->nullable(false);
            $table->string('fullName', 255)->nullable(true);
            $table->string('position', 255)->nullable(true);
            $table->string('electronic_mail', 255)->nullable(true);
            $table->string('phone_number', 255)->nullable(true);
            $table->string('company', 255)->nullable(true);
            $table->string('remember_token', 100)->nullable(true);
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
