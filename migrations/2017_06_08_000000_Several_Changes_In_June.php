<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeveralChangesInJune extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->string('items')->nullable();
            $table->string('item_grants')->nullable();
            $table->string('item_sells')->nullable();
            $table->string('ability_levels')->nullable();
            $table->string('ability_uses')->nullable();
            $table->string('ability_damage')->nullable();
            $table->string('item_uses')->nullable();
            $table->string('player_damage')->nullable();

            $table->integer('draft_position')->nullable();
            $table->integer('ban')->nullable();
            $table->integer('pick')->nullable();
        });


        Schema::table('build', function (Blueprint $table) {
            $table->string('dimension_on')->nullable();
        });

        Schema::create('global_point_build', function (Blueprint $table) {
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

            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id'], 'global_point_build_in_space');

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

        });    

        Schema::create('global_point_hero', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('updated_at');

            // links - core dimensions
            // meta
            $table->bigInteger('series_id')->index();  // when
            $table->bigInteger('filter_id')->index();  // custom

            // links - additional dimensions
            $table->bigInteger('hero_id')->index();
            $table->bigInteger('game_mode_id')->index();
            $table->bigInteger('skill_tier_id')->index();
            $table->bigInteger('build_id')->nullable()->index();
            $table->bigInteger('role_id')->nullable()->index();
            $table->bigInteger('region_id')->nullable()->index();

            $table->bigInteger('enemy_hero_id')->index();

            $table->unique(['series_id', 'filter_id', 'game_mode_id', 'skill_tier_id', 'build_id', 'role_id', 'region_id'], 'global_point_hero_in_space');


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

        });    


        Schema::create('ability', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('api_id')->nullable();
            $table->string('hero_id')->nullable();
            $table->string("ability");

            $table->string("name");
            $table->string("type");
            $table->string("active");
            $table->string("passive");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn('items');
            $table->dropColumn('item_grants');
            $table->dropColumn('item_sells');
            $table->dropColumn('ability_levels');
            $table->dropColumn('ability_uses');
            $table->dropColumn('ability_damage');
            $table->dropColumn('item_uses');
            $table->dropColumn('player_damage');

            $table->dropColumn('draft_position')->nullable();
            $table->dropColumn('pick')->nullable();
            $table->dropColumn('ban');
        });

        Schema::table('build', function (Blueprint $table) {
            $table->dropColumn('dimension_on');
        });


        Schema::dropIfExists('global_point_build');

        Schema::dropIfExists('global_point_hero');

        Schema::dropIfExists('ability');
    }
}
