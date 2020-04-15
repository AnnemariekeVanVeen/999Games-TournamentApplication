<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $userTable = config('usersTable');

        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('round_id');
            $table->foreign('round_id')->on('rounds')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('game_table_id');
            $table->foreign('game_table_id')->on('game_tables')->references('id')->onUpdate('cascade')->onDelete('cascade');

//            Score per round, for each user.
            $table->unsignedSmallInteger('amount')->nullable()->default(null);
//            Player's weight, based on score.
            $table->unsignedDecimal('weight', 10, 6)->default(null)->nullable();
            $table->boolean('validated')->nullable();
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
        Schema::dropIfExists('scores');
    }
}
