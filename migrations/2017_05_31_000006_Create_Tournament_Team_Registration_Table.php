<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTeamRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_team', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('team_id')->index();
            $table->integer('division_id')->index();

            $table->integer('played');                            
            $table->integer('wins'); 
            $table->integer('games_played');                           
            $table->integer('games_won');
            $table->integer('seed');
            $table->double('points');                            
            $table->string('sub_division');


            $table->unique(['team_id', 'division_id']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_team');
    }
}


