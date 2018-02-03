<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRankedTrueskill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_items', function (Blueprint $table) {
            $table->double("trueskill_ranked_mu")->nullable();
            $table->double("trueskill_ranked_sigma")->nullable();
            $table->unsignedTinyInteger("any_afk")->nullable();
        });
        Schema::table('player', function (Blueprint $table) {
            $table->double("trueskill_ranked_mu")->nullable();
            $table->double("trueskill_ranked_sigma")->nullable();
        });
        Schema::table('player_point', function (Blueprint $table) {
            $table->double('trueskill_ranked_max')->after('trueskill_max')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_items', function (Blueprint $table) {
            $table->dropColumn("trueskill_ranked_mu");
            $table->dropColumn("trueskill_ranked_sigma");
            $table->dropColumn("any_afk");
        });
        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn("trueskill_ranked_mu");
            $table->dropColumn("trueskill_ranked_sigma");
        });
        Schema::table('player_point', function (Blueprint $table) {
            $table->dropColumn("trueskill_ranked_max");
        });
    }
}
