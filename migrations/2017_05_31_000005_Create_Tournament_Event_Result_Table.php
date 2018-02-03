<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentEventResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id')->nullable();                  // tournament ID - assuming we get it some day from API

            $table->integer('event_id')->index();
            $table->uuid('match_api_id')->index();
            $table->uuid('shard_id')->index();

            $table->unsignedTinyInteger('sequence')->nullable();
            $table->integer('winner_id')->index()->nullable();

            $table->unique(['event_id', 'match_api_id', 'shard_id']);
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result');
    }
}


