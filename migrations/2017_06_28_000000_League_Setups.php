<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeagueSetups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team', function (Blueprint $table) {
            // $table->dropColumn('tournament_id');
        });

        Schema::table('stage', function (Blueprint $table) {
            $table->integer('rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            // $table->integer('tournament_id');
        });

        Schema::table('stage', function (Blueprint $table) {
            $table->dropColumn('rank');
        });
    }
}
