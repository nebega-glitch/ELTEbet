<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('MatchId');
            $table->unsignedBigInteger('Team1Score');
            $table->unsignedBigInteger('Team2Score');
            $table->unsignedBigInteger('Points')->nullable();
            $table->timestamps();

            $table->unique(['UserId', 'MatchId']);
            $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('MatchId')->references('id')->on('fixtures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips');
    }
}
