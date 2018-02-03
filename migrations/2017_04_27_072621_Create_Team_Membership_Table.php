<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_membership', function (Blueprint $table) {
            $table->increments('id');

            $table->uuid('player_api_id');                          // player who is part of the guild/team
            $table->bigInteger('user_id')->nullable();              // User ID FK to ensure authenticity. Discord will send us the id.

            $table->unsignedSmallInteger('team_id');    // Id for the team (once we have API we will replace with UUID).
            $table->timestamp('joined_on');             // date whe teh player was added to team.
            $table->enum('status', ['pending', 'initiate', 'member', 'officer', 'leader', 'former', 'veteran']);
            $table->bigInteger('fame');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_membership');
    }
}
