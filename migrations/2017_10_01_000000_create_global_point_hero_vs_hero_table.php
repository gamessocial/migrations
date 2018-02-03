<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalPointHeroVsHeroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_point_hero_vs_hero', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTimeTz('updated_at');

            // links - core dimensions
            // meta
            $table->bigInteger('series_id')->index();  // when
            $table->bigInteger('filter_id')->index();  // custom

            // links - additional dimensions
            // attributes
            $table->bigInteger('hero_id')->index();
            $table->bigInteger('role_id')->index();
            $table->bigInteger('hero2_id')->index();
            $table->bigInteger('role2_id')->index();
            $table->boolean('played_with')->index();

            $table->bigInteger('game_mode_id')->index();
            $table->bigInteger('skill_tier_id')->index();
            $table->bigInteger('region_id')->index();


            $table->unique(['series_id', 'filter_id', 'hero_id', 'role_id', 'hero2_id', 'role2_id', 'played_with', 'game_mode_id', 'skill_tier_id', 'region_id'], 'global_point_hero_vs_hero_in_space');

            // same as global_point
            // sums
            $table->bigInteger('played');
            $table->bigInteger('wins');
            $table->double('trueskill_delta');
            $table->bigInteger('duration');
            $table->bigInteger('kills');
            $table->bigInteger('deaths');
            $table->bigInteger('assists');
            $table->bigInteger('farm');
            $table->bigInteger('minion_kills');
            $table->bigInteger('jungle_kills');
            $table->bigInteger('non_jungle_minion_kills');
            $table->bigInteger('crystal_mine_captures');
            $table->bigInteger('gold_mine_captures');
            $table->bigInteger('kraken_captures');
            $table->bigInteger('turret_captures');
            $table->bigInteger('gold');
            $table->bigInteger('impact_score');
            $table->bigInteger('surrender');

            $table->unsignedBigInteger('item_001_use');  // Aegis
            $table->unsignedBigInteger('item_004_use');  // Atlas
            $table->unsignedBigInteger('item_014_use');  // Contraption
            $table->unsignedBigInteger('item_015_use');  // Crucible
            $table->unsignedBigInteger('item_017_use');  // Crystal Infusion
            $table->unsignedBigInteger('item_018_use');  // Dragonblood Contract
            $table->unsignedBigInteger('item_020_use');  // Echo
            $table->unsignedBigInteger('item_024_use');  // Flare
            $table->unsignedBigInteger('item_025_use');  // Flare Gun
            $table->unsignedBigInteger('item_026_use');  // Fountain
            $table->unsignedBigInteger('item_028_use');  // Halcyon Chargers
            $table->unsignedBigInteger('item_029_use');  // Halcyon Potion
            $table->unsignedBigInteger('item_034_use');  // Journey Boots
            $table->unsignedBigInteger('item_041_use');  // Minion Candy
            $table->unsignedBigInteger('item_043_use');  // Nullwave Gauntlet
            $table->unsignedBigInteger('item_048_use');  // Protector Contract
            $table->unsignedBigInteger('item_049_use');  // Reflex Block
            $table->unsignedBigInteger('item_050_use');  // Scout Trap
            $table->unsignedBigInteger('item_053_use');  // Shiversteel
            $table->unsignedBigInteger('item_057_use');  // Sprint Boots
            $table->unsignedBigInteger('item_063_use');  // Travel Boots
            $table->unsignedBigInteger('item_066_use');  // War Treads
            $table->unsignedBigInteger('item_068_use');  // Weapon Infusion
            $table->unsignedBigInteger('item_069_use');  // Taunt Kissy
            $table->unsignedBigInteger('item_070_use');  // Taunt
            $table->unsignedBigInteger('item_071_use');  // Voice over Taunt
            $table->unsignedBigInteger('item_072_use');  // Healing Flask
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_point_hero_vs_hero');
    }
}
