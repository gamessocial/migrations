<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchApiIdOnPhase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->uuid('match_api_id')->after('participant_api_id')->index();
        });
    }
    
    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn('match_api_id');
        });

    }
}
