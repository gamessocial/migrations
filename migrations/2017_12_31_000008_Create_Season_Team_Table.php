<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_season_team', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('vg_season_id')->index();                              
            $table->integer('vg_team_id')->index();                            

            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->timestamp('joined_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('left_on')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->integer('game_mode')->index();                               // FK to Game Mode table.

            // stats (use game_mode to identity various tournie stats)
            // any player based stat is averaged
            $table->integer('played');
            $table->integer('wins');
            $table->double('perf_score');      // dont have a formula for it yet

            $table->double('cspm');        // cs/min
            $table->double('gpm');         // gold/min
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_season_team');
    }
}
