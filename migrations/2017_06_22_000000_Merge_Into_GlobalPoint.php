<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MergeIntoGlobalPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // build table: item, number of items as int
        Schema::table('build', function (Blueprint $table) {
            $table->dropColumn('item_1');
            $table->dropColumn('item_2');
            $table->dropColumn('item_3');
            $table->dropColumn('item_4');
            $table->dropColumn('item_5');
            $table->dropColumn('item_6');
        });
        Schema::table('build', function (Blueprint $table) {
            $table->bigInteger('item_1')->nullable();
            $table->bigInteger('item_2')->nullable();
            $table->bigInteger('item_3')->nullable();
            $table->bigInteger('item_4')->nullable();
            $table->bigInteger('item_5')->nullable();
            $table->bigInteger('item_6')->nullable();
            $table->integer('item_1_count')->nullable();
            $table->integer('item_2_count')->nullable();
            $table->integer('item_3_count')->nullable();
            $table->integer('item_4_count')->nullable();
            $table->integer('item_5_count')->nullable();
            $table->integer('item_6_count')->nullable();
        });

        // add enemy, add to index, drop unused traits
        Schema::table('global_point', function (Blueprint $table) {
            $table->bigInteger('enemy_hero_id')->after('role_id');
            $table->bigInteger('enemy_role_id')->after('enemy_hero_id');

            $table->dropUnique('global_point_in_space');
            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'enemy_hero_id', 'enemy_role_id', 'region_id'], 'global_point_in_space');

            // add previously missing `farm`
            $table->double('farm')->after('assists');

            // were null, add as soon as built
            $table->dropColumn('kda_ratio');
            $table->dropColumn('kill_participation');
            $table->dropColumn('cs_per_min');
            $table->dropColumn('kills_per_min');

            $table->dropColumn('objective_score');
            $table->dropColumn('damage_cp_score');
            $table->dropColumn('damage_wp_score');
            $table->dropColumn('sustain_score');
            $table->dropColumn('farm_lane_score');
            $table->dropColumn('kill_score');
            $table->dropColumn('objective_lane_score');
            $table->dropColumn('farm_jungle_score');
            $table->dropColumn('peel_score');
            $table->dropColumn('kill_assist_score');
            $table->dropColumn('objective_jungle_score');
            $table->dropColumn('vision_score');
            $table->dropColumn('heal_score');
            $table->dropColumn('assist_score');
            $table->dropColumn('utility_score');
            $table->dropColumn('synergy_score');
            $table->dropColumn('build_score');
            $table->dropColumn('offmeta_score');
        });

        Schema::drop('global_point_hero');
        Schema::drop('global_point_build');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // help?
    }
}
