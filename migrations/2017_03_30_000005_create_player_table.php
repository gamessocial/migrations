<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
*    Will hold the player's core profile.
*    Data in this will be populated only when a user logs onto the site 
*    and generated a profile. We don't need to keep data for every single user
*    as many may never visit the same.
*/
class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->increments('id');

            // uuid
            $table->string('shard_id');
            $table->uuid('api_id')->unique();

            // meta
            $table->string('name')->index();
            $table->timestamp('last_match_created_date')->nullable();
            $table->timestamp('last_update')->nullable();

            // stats from api
            $table->timestamp('created_at')->nullable();
            $table->integer('level');
            $table->integer('xp');
            $table->float('lifetime_gold');
            $table->smallInteger('skill_tier')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
}
