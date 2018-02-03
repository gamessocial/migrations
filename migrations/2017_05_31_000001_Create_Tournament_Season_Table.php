<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id')->nullable();                                   // tournament ID - assuming we get it some day from API
            $table->integer('league_id')->index();                              // FK to Tournament table.

            $table->string('name');
            $table->timestampTz('start')->nullable();
            $table->timestampTz('end')->nullable();
            $table->enum('status', ['planned', 'pre-season', 'in-season', 'post-season']);    
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('season');
    }
}
