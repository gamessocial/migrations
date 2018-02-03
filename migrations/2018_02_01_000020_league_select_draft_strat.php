<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeagueSelectDraftStrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vg_league', function (Blueprint $table) {
            $table->integer("draft_strat")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vg_league', function (Blueprint $table) {
            $table->dropColumn("draft_strat");
        });
    }
}
