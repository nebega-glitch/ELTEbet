<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->date('Start');
            $table->unsignedBigInteger('Team1Id');
            $table->unsignedBigInteger('Team2Id');
            $table->unsignedBigInteger('Team1Score')->nullable();
            $table->unsignedBigInteger('Team2Score')->nullable();
            $table->enum('Result', ['H','V','D'])->nullable();
            $table->timestamps();

            $table->unique(['Team1Id', 'Team2Id','Start']);
            $table->foreign('Team1Id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('Team2Id')->references('id')->on('teams')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixtures');
    }
}
