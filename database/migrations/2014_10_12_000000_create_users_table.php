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
            $table->string('UserFirstname');
            $table->string('UserPrefix')->nullable();
            $table->string('UserLastname');
            $table->string('UserPhonenumber')->nullable();
            $table->string('UserCity');
            $table->string('UserStreet');
            $table->string('UserHousenumber');
            $table->string('UserPostalcode');
            $table->string('UserGender')->nullable();
            $table->date('UserBirthdate');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->boolean('UserIsAdmin')->default('0');
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
