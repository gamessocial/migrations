<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_participants', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('league_id')->index();               // FK to tournaments's table
            $table->unsignedBigInteger('team_id')->index();                     // FK to tournament team's table
            $table->unsignedBigInteger('role_id')->index();                     // FK to tournament team's table

            $table->uuid('player_api_id')->index();                         // FK to player's API id
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament_participants');
    }
}
