<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroCoreStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero_core_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string("series");

            $table->double("hp");
            $table->double("energy");
            $table->double("weapon_damage");
            $table->double("attack_speed");
            $table->double("armor");
            $table->double("shield");
            $table->double("attack_range");
            $table->double("move_speed");
            $table->double("hp_regen");
            $table->double("ep_regen");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hero_core_stats');
    }
}
