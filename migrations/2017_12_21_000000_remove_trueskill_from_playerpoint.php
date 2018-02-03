<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveTrueskillFromPlayerPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->dropColumn("trueskill_max");
            $table->dropColumn("trueskill_ranked_max");
            $table->dropColumn("trueskill_delta");
            $table->dropColumn("trueskill_mu");
            $table->dropColumn("trueskill_sigma");
            $table->dropColumn("elo");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_point', function (Blueprint $table) {
            $table->double("trueskill_max");
            $table->double("trueskill_ranked_max");
            $table->double("trueskill_delta");
            $table->double("trueskill_mu");
            $table->double("trueskill_sigma");
            $table->double("elo");
        });
    }
}
