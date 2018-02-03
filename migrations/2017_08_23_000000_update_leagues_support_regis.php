<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLeaguesSupportRegis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->boolean("registrations_open")->nullable();
            $table->boolean("roster_locked")->nullable();
        });

        Schema::table('event', function (Blueprint $table) {
            $table->dropColumn("round");
            $table->dropColumn("position");

            $table->integer("win_points")->nullable();
            $table->integer("bonus_points")->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->dropColumn("registrations_open");
            $table->dropColumn("roster_locked");
        });

        Schema::table('event', function (Blueprint $table) {
            $table->integer("round")->nullable();
            $table->integer("position")->nullable();

            $table->dropColumn("win_points");
            $table->dropColumn("bonus_points");
        });
    }
}
