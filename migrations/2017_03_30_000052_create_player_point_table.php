<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_point', function (Blueprint $table) {
            $table->increments('id');

            // foreign key
            $table->uuid('player_api_id')->index();

            $table->unsignedBigInteger('series_id')->index();  
            $table->unsignedBigInteger('filter_id')->index();  
            $table->unsignedBigInteger('hero_id')->index();
            $table->unsignedBigInteger('game_mode_id')->index();
            $table->unsignedBigInteger('role_id')->index();  

            // sums
            $table->integer('played')->nullable();
            $table->integer('wins')->nullable();
            $table->integer('time_spent')->nullable();

            // combination of dimensions is unique
            $table->unique(['player_api_id', 'series_id', 'filter_id', 'hero_id', 'game_mode_id'], 'player_point_in_space');

            $table->dateTimeTz('updated_at');


            // stats: this is the same as participant_stats
            $table->unsignedInteger('kills')->nullable();
            $table->unsignedInteger('deaths')->nullable();
            $table->unsignedInteger('assists')->nullable();
            $table->unsignedInteger('minion_kills')->nullable();
            $table->unsignedInteger('jungle_kills')->nullable();
            $table->unsignedInteger('non_jungle_minion_kills')->nullable();
            $table->unsignedInteger('crystal_mine_captures')->nullable();
            $table->unsignedInteger('gold_mine_captures')->nullable();
            $table->unsignedInteger('kraken_captures')->nullable();
            $table->unsignedInteger('turret_captures')->nullable();
            $table->unsignedInteger('gold')->nullable();

            $table->unsignedInteger('hero_level')->nullable();  // only via Telemetry!

            // traits
            // helpers
            $table->double('kda_ratio', 10, 5)->nullable();
            $table->double('kill_participation', 10, 5)->nullable();
            $table->double('cs_per_min', 14, 5)->nullable();
            $table->double('kills_per_min', 12, 5)->nullable();
            // shared
            $table->unsignedInteger('impact_score')->nullable();
            $table->unsignedInteger('objective_score')->nullable();
            $table->unsignedInteger('damage_cp_score')->nullable();  // c & j
            $table->unsignedInteger('damage_wp_score')->nullable();  // c & j
            $table->unsignedInteger('sustain_score')->nullable();  // j & cpt
            // carry
            $table->unsignedInteger('farm_lane_score')->nullable();
            $table->unsignedInteger('kill_score')->nullable();
            $table->unsignedInteger('objective_lane_score')->nullable();
            // jungler
            $table->unsignedInteger('farm_jungle_score')->nullable();
            $table->unsignedInteger('peel_score')->nullable();
            $table->unsignedInteger('kill_assist_score')->nullable();
            $table->unsignedInteger('objective_jungle_score')->nullable();  // gold mine, sentry, Kraken
            // captain
            $table->unsignedInteger('vision_score')->nullable();
            $table->unsignedInteger('heal_score')->nullable();
            $table->unsignedInteger('assist_score')->nullable();
            $table->unsignedInteger('utility_score')->nullable();
            // meta
            $table->unsignedInteger('synergy_score')->nullable();
            $table->unsignedInteger('build_score')->nullable();
            $table->unsignedInteger('offmeta_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_point');
    }
}
