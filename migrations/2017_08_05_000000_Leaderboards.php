<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Leaderboards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // needed to make LBs work in Leagues
        // Schema::table('tournament_participants', function (Blueprint $table) {
            // $table->unsignedBigInteger('season_id')->after('league_id')->nullable();
            // $table->enum('status', ['active', 'left', 'kicked', 'banned'])->nullable();

            // $table->unique(['league_id', 'season_id', 'team_id', 'player_api_id'], 'player_team_league_membership_index');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament_participants', function (Blueprint $table) {
            $table->dropUnique('player_team_league_membership_index');

            $table->dropColumn('season_id');
            $table->dropColumn('status');
        });
    }
}
