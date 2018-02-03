<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRankPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player', function (Blueprint $table) {
            $table->integer("rank_points_ranked")->nullable();
            $table->integer("rank_points_blitz")->nullable();
            $table->integer("played_ranked")->nullable();
            $table->integer("played_casual")->nullable();
            $table->integer("played_blitz")->nullable();
            $table->integer("played_aral")->nullable();
            $table->string("guild_tag")->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn("rank_points_ranked");
            $table->dropColumn("rank_points_blitz");
            $table->dropColumn("played_ranked");
            $table->dropColumn("played_casual");
            $table->dropColumn("played_blitz");
            $table->dropColumn("played_aral");
            $table->dropColumn("guild_tag");
        });
    }
}
