<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id')->nullable();                  // tournament ID - assuming we get it some day from API
            $table->integer('season_id')->index();                      // FK to Tournament table.

            $table->string('name');
            $table->timestampTz('start')->nullable();
            $table->timestampTz('end')->nullable();

            $table->enum('type', ['group', 'league', 'swiss', 'single_elimination', 'double_elimination', 'bracket']);
            $table->enum('status', ['planned', 'active', 'finished']);    
            $table->enum('phase', ['pre-season','group','playoffs','finals']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage');
    }
}
