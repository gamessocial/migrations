<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixPlayerPointIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->dropUnique('player_point_in_space');
            $table->unique(['player_api_id', 'series_id', 'filter_id', 'hero_id', 'game_mode_id', 'role_id'], 'player_point_in_space');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->dropUnique('player_point_in_space');
            $table->unique(['player_api_id', 'series_id', 'filter_id', 'hero_id', 'game_mode_id'], 'player_point_in_space');
        });
    }
}
