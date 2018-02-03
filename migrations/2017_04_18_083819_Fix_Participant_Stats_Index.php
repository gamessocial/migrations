<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixParticipantStatsIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_stats', function (Blueprint $table) {
            // combination of dimensions is unique
            $table->unique(['participant_api_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_stats', function (Blueprint $table) {
            // combination of dimensions is unique
            $table->dropUnique(['participant_api_id', 'created_at']);
        });
    }
}


