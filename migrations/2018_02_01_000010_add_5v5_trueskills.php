<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5v5Trueskills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_items', function (Blueprint $table) {
            $table->double("trueskill_3v3_mu")->nullable();
            $table->double("trueskill_3v3_sigma")->nullable();
            $table->double("trueskill_5v5_mu")->nullable();
            $table->double("trueskill_5v5_sigma")->nullable();
            $table->double("trueskill_5v5_casual_mu")->nullable();
            $table->double("trueskill_5v5_casual_sigma")->nullable();
            $table->double("trueskill_5v5_ranked_mu")->nullable();
            $table->double("trueskill_5v5_ranked_sigma")->nullable();
        });

        Schema::table('player', function (Blueprint $table) {
            $table->double("trueskill_3v3_mu")->nullable();
            $table->double("trueskill_3v3_sigma")->nullable();
            $table->double("trueskill_5v5_mu")->nullable();
            $table->double("trueskill_5v5_sigma")->nullable();
            $table->double("trueskill_5v5_casual_mu")->nullable();
            $table->double("trueskill_5v5_casual_sigma")->nullable();
            $table->double("trueskill_5v5_ranked_mu")->nullable();
            $table->double("trueskill_5v5_ranked_sigma")->nullable();
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
            $table->dropColumn("trueskill_3v3_mu");
            $table->dropColumn("trueskill_3v3_sigma");
            $table->dropColumn("trueskill_5v5_mu");
            $table->dropColumn("trueskill_5v5_sigma");
            $table->dropColumn("trueskill_5v5_casual_mu");
            $table->dropColumn("trueskill_5v5_casual_sigma");
            $table->dropColumn("trueskill_5v5_ranked_mu");
            $table->dropColumn("trueskill_5v5_ranked_sigma");
        });
        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn("trueskill_3v3_mu");
            $table->dropColumn("trueskill_3v3_sigma");
            $table->dropColumn("trueskill_5v5_mu");
            $table->dropColumn("trueskill_5v5_sigma");
            $table->dropColumn("trueskill_5v5_casual_mu");
            $table->dropColumn("trueskill_5v5_casual_sigma");
            $table->dropColumn("trueskill_5v5_ranked_mu");
            $table->dropColumn("trueskill_5v5_ranked_sigma");
        });
    }
}
