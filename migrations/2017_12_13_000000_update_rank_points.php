<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRankPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn("rank_points_ranked");
            $table->dropColumn("rank_points_blitz");
            $table->dropColumn("lifetime_gold");
            $table->dropColumn("elo");
        });

        Schema::table('player', function (Blueprint $table) {
            $table->double("rank_points_ranked")->nullable();
            $table->double("rank_points_blitz")->nullable();
            $table->integer("played_blitz_rounds")->nullable();
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
            $table->dropColumn("rank_points_ranked")->nullable();
            $table->dropColumn("rank_points_blitz")->nullable();
            $table->dropColumn("played_blitz_rounds")->nullable();
        });

        Schema::table('player', function (Blueprint $table) {
            $table->integer("rank_points_ranked");
            $table->integer("rank_points_blitz");
            $table->double("lifetime_gold");
            $table->double("elo");
        });
    }
}
