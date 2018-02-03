<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DynamicColumnsGlobalPointPhase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->dropColumn('ability_a_level');
            $table->dropColumn('ability_b_level');
            $table->dropColumn('ability_c_level');
            $table->dropColumn('hero_level');
            $table->dropColumn('kda_ratio');
            $table->dropColumn('kill_participation');
            $table->dropColumn('cs_per_min');
            $table->dropColumn('kills_per_min');
        });
    }


    public function down()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->unsignedBigInteger('kda_ratio');
            $table->unsignedBigInteger('kill_participation');
            $table->unsignedBigInteger('cs_per_min');
            $table->unsignedBigInteger('kills_per_min');
        });

    }
}
