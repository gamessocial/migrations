<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQueueTrueskills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_items', function (Blueprint $table) {
            $table->double("trueskill_casual_mu")->nullable();
            $table->double("trueskill_casual_sigma")->nullable();
            $table->double("trueskill_blitz_mu")->nullable();
            $table->double("trueskill_blitz_sigma")->nullable();
            $table->double("trueskill_br_mu")->nullable();
            $table->double("trueskill_br_sigma")->nullable();
        });
        Schema::table('player', function (Blueprint $table) {
            $table->double("trueskill_casual_mu")->nullable();
            $table->double("trueskill_casual_sigma")->nullable();
            $table->double("trueskill_blitz_mu")->nullable();
            $table->double("trueskill_blitz_sigma")->nullable();
            $table->double("trueskill_br_mu")->nullable();
            $table->double("trueskill_br_sigma")->nullable();
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
            $table->dropColumn("trueskill_casual_mu");
            $table->dropColumn("trueskill_casual_sigma");
            $table->dropColumn("trueskill_blitz_mu");
            $table->dropColumn("trueskill_blitz_sigma");
            $table->dropColumn("trueskill_br_mu");
            $table->dropColumn("trueskill_br_sigma");
        });
        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn("trueskill_casual_mu");
            $table->dropColumn("trueskill_casual_sigma");
            $table->dropColumn("trueskill_blitz_mu");
            $table->dropColumn("trueskill_blitz_sigma");
            $table->dropColumn("trueskill_br_mu");
            $table->dropColumn("trueskill_br_sigma");
        });
    }
}
