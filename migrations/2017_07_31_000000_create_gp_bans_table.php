<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_point_bans', function (Blueprint $table) {
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
            $table->bigInteger('region_id')->nullable()->index();


            $table->unique(['series_id', 'filter_id', 'hero_id', 'game_mode_id', 'skill_tier_id', 'region_id'], 'global_point_bans_in_space');

            // same as player_point
            // sums
            $table->bigInteger('played')->nullable();
            $table->bigInteger('bans')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_point_bans');
    }
}
