<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalPointPhaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_point_phase', function (Blueprint $table) {
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

            // phase dimensions
            $table->bigInteger('phase_start')->nullable()->index();
            $table->bigInteger('phase_end')->nullable()->index();

            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id'], 'global_point_phase_in_space');

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
            $table->unsignedBigInteger('farm')->nullable();
            $table->unsignedBigInteger('minion_kills')->nullable();
            $table->unsignedBigInteger('jungle_kills')->nullable();
            $table->unsignedBigInteger('non_jungle_minion_kills')->nullable();
            $table->unsignedBigInteger('crystal_mine_captures')->nullable();
            $table->unsignedBigInteger('gold_mine_captures')->nullable();
            $table->unsignedBigInteger('kraken_captures')->nullable();
            $table->unsignedBigInteger('turret_captures')->nullable();
            $table->unsignedBigInteger('gold')->nullable();

            $table->double('dmg_true_hero')->nullable();
            $table->double('dmg_true_kraken')->nullable();
            $table->double('dmg_true_turret')->nullable();
            $table->double('dmg_true_vain_turret')->nullable();
            $table->double('dmg_true_others')->nullable();
            $table->double('dmg_dealt_hero')->nullable();
            $table->double('dmg_dealt_kraken')->nullable();
            $table->double('dmg_dealt_turret')->nullable();
            $table->double('dmg_dealt_vain_turret')->nullable();
            $table->double('dmg_dealt_others')->nullable();

            $table->double('dmg_rcvd_dealt_hero')->nullable();
            $table->double('dmg_rcvd_true_hero')->nullable();
            $table->double('dmg_rcvd_dealt_others')->nullable();
            $table->double('dmg_rcvd_true_others')->nullable();

            $table->unsignedTinyInteger('ability_a_level')->nullable();
            $table->unsignedTinyInteger('ability_b_level')->nullable();
            $table->unsignedTinyInteger('ability_c_level')->nullable();

            $table->unsignedTinyInteger('hero_level')->nullable();  // only via Telemetry!

            // traits
            $table->double('kda_ratio', 5, 5)->nullable();
            $table->double('kill_participation', 5, 5)->nullable();
            $table->double('cs_per_min', 7, 5)->nullable();
            $table->double('kills_per_min', 6, 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_point_phase');
    }
}
