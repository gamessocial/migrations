<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
*   Represents the Matches. Some of the data will be Raw Data
*   and some will be computed.
*/
class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->increments('id');

            // foreign key
            $table->string('shard_id');
            $table->uuid('api_id')->unique();

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedSmallInteger('duration');
            $table->string('game_mode', 16);
            $table->string('end_game_reason', 16);
            $table->string('queue', 16);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match');
    }
}
