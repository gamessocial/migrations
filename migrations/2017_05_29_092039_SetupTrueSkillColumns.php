<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupTrueSkillColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant', function (Blueprint $table) {
            $table->double('trueskill_mu')->nullable();
            $table->double('trueskill_sigma')->nullable();
            $table->double('trueskill_delta')->nullable();
            $table->double('nacl_score')->nullable();
        });

        Schema::table('participant_stats', function (Blueprint $table) {
            $table->double('nacl_score')->nullable();
        });

        Schema::table('player', function (Blueprint $table) {
            $table->double('trueskill_mu')->nullable();
            $table->double('trueskill_sigma')->nullable();
        });

        Schema::table('match', function (Blueprint $table) {
            $table->double('trueskill_quality')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant', function (Blueprint $table) {
            $table->dropColumn('trueskill_mu');
            $table->dropColumn('trueskill_sigma');
            $table->dropColumn('trueskill_delta');
        });

        Schema::table('player', function (Blueprint $table) {
            $table->dropColumn('trueskill_mu');
            $table->dropColumn('trueskill_sigma');
        });

        Schema::table('match', function (Blueprint $table) {
            $table->dropColumn('trueskill_quality');
        });
    }
}
