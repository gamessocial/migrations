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
class CreateGamerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player_api_id')->index();           // FK to player's table

            $table->string('name')->index();
            $table->string('vainsocial_status')->nullable();    // regular, fan, etc.

            $table->string('vainglory_ign')->nullable();
            $table->string('vainglory_shard_id')->nullable();
            $table->boolean('vainglory_is_pro')->nullable();

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamer');
    }
}
