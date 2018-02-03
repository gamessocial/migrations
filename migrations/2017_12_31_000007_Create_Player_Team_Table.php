<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_player_team', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('player_id')->index();                              
            $table->integer('vg_team_id')->index();                            

            $table->enum('membership', ['member', 'former']);
            $table->enum('role', ['carry', 'captain', 'jungler']);
            $table->timestamp('joined_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('left_on')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_player_team');
    }
}
