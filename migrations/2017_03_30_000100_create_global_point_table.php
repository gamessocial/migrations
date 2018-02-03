<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_point', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('updated_at');

            // links - core dimensions
            // meta
            $table->bigInteger('series_id')->index();  // when
            $table->bigInteger('filter_id')->index();  // custom

            // links - additional dimensions
            // attributes
            $table->bigInteger('hero_id')->index();
            $table->bigInteger('game_mode_id')->index();
            $table->bigInteger('skill_tier_id')->index();
            $table->bigInteger('build_id')->nullable()->index();
            $table->bigInteger('role_id')->nullable()->index();
            $table->bigInteger('region_id')->nullable()->index();

            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id'], 'global_point_in_space');

            // same as player_point
            // sums
            $table->bigInteger('played')->nullable();
            $table->bigInteger('wins')->nullable();
            $table->bigInteger('time_spent')->nullable();

            // stats: this is the same as participant_stats
            // but sums (stats) and averages (traits)
            $table->unsignedBigInteger('kills')->nullable();
            $table->unsignedBigInteger('deaths')->nullable();
            $table->unsignedBigInteger('assists')->nullable();
            $table->unsignedBigInteger('minion_kills')->nullable();
            $table->unsignedBigInteger('jungle_kills')->nullable();
            $table->unsignedBigInteger('non_jungle_minion_kills')->nullable();
            $table->unsignedBigInteger('crystal_mine_captures')->nullable();
            $table->unsignedBigInteger('gold_mine_captures')->nullable();
            $table->unsignedBigInteger('kraken_captures')->nullable();
            $table->unsignedBigInteger('turret_captures')->nullable();
            $table->unsignedBigInteger('gold')->nullable();

            // traits
            // helpers
            $table->double('kda_ratio', 20, 5)->nullable();
            $table->double('kill_participation', 20, 5)->nullable();
            $table->double('cs_per_min', 20, 5)->nullable();
            $table->double('kills_per_min', 20, 5)->nullable();
            // scores - all int between 0 and 100
            // shared
            $table->unsignedBigInteger('impact_score')->nullable();
            $table->unsignedBigInteger('objective_score')->nullable();
            $table->unsignedBigInteger('damage_cp_score')->nullable();  // c & j
            $table->unsignedBigInteger('damage_wp_score')->nullable();  // c & j
            $table->unsignedBigInteger('sustain_score')->nullable();  // j & cpt
            // carry
            $table->unsignedBigInteger('farm_lane_score')->nullable();
            $table->unsignedBigInteger('kill_score')->nullable();
            $table->unsignedBigInteger('objective_lane_score')->nullable();
            // jungler
            $table->unsignedBigInteger('farm_jungle_score')->nullable();
            $table->unsignedBigInteger('peel_score')->nullable();
            $table->unsignedBigInteger('kill_assist_score')->nullable();
            $table->unsignedBigInteger('objective_jungle_score')->nullable();  // gold mine, sentry, Kraken
            // captain
            $table->unsignedBigInteger('vision_score')->nullable();
            $table->unsignedBigInteger('heal_score')->nullable();
            $table->unsignedBigInteger('assist_score')->nullable();
            $table->unsignedBigInteger('utility_score')->nullable();
            // meta
            $table->unsignedBigInteger('synergy_score')->nullable();
            $table->unsignedBigInteger('build_score')->nullable();
            $table->unsignedBigInteger('offmeta_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_point');
    }
}
