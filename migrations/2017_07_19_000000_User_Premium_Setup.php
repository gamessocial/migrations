<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserPremiumSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('access_type', ['free', 'loyal', 'plus', 'premium']);
        });

        Schema::table('player_point', function (Blueprint $table) {
            //will be moved to different positions
            if (Schema::hasColumn('player_point', 'updated_at')) {
                $table->dropColumn('updated_at');
                $table->dropColumn('time_spent');

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
                $table->dropColumn('hero_level');
            }
        });
        
        Schema::table('player_point', function (Blueprint $table) {
            $table->double('trueskill_max')->after('wins')->nullable();
            $table->double('trueskill_delta')->after('trueskill_max')->nullable();
            $table->double('trueskill_mu')->after('trueskill_delta')->nullable();
            $table->double('trueskill_sigma')->after('trueskill_mu')->nullable();
            $table->double('elo')->after('trueskill_sigma')->nullable();

            $table->dateTimeTz('updated_at')->after('id');
            $table->bigInteger('time_spent')->after('wins');
            $table->double('farm')->after('assists');
        });

        Schema::table('global_point', function (Blueprint $table) {
            $table->double('trueskill_delta')->after('wins')->nullable();
            $table->double('surrender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('access_type');
        });

        Schema::table('player_point', function (Blueprint $table) {
            $table->dropColumn('trueskill_mu');
            $table->dropColumn('trueskill_sigma');
            $table->dropColumn('trueskill_max');
            $table->dropColumn('trueskill_delta');
            $table->dropColumn('elo');

            $table->dropColumn('updated_at');
            $table->dropColumn('time_spent');
            $table->dropColumn('farm');
        });

        Schema::table('global_point', function (Blueprint $table) {
            $table->dropColumn('trueskill_delta')->after('wins')->nullable();
            $table->dropColumn('surrender')->nullable();
        });
    }
}
