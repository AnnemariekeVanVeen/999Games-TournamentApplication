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
            $table->bigIncrements('id');
            $table->string('first_name', 40);
            // English for Tussenvoegsel
            $table->string('prefix', 10)->nullable();
            $table->string('last_name', 40);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('cancelled')->nullable();
            $table->boolean('eliminated')->nullable();
            $table->string('password');
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
