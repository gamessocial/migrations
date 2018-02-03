<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id')->nullable();                  // tournament ID - assuming we get it some day from API
            $table->integer('division_id')->index();                           

            $table->string('name');
            $table->integer('team_1_id')->index()->nullable();                            // FK to Teams table - Team A
            $table->integer('team_1_score')->nullable();
            $table->integer('team_2_id')->index()->nullable();                            // FK to Teams table - Team B
            $table->integer('team_2_score')->nullable();
            $table->timestamp('date')->nullable();
            $table->enum('bestOf', ['1', '3', '5', '7', '9'])->nullable();
            $table->integer('winner_id')->index()->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
