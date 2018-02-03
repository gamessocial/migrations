<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRosterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster', function (Blueprint $table) {
            $table->increments('id')->unique();

            // uuid
            $table->string('shard_id');
            $table->uuid('api_id')->unique();

            // foreign key
            $table->uuid('match_api_id')->index();

            $table->unsignedSmallInteger('aces_earned');
            $table->unsignedMediumInteger('gold');
            $table->unsignedSmallInteger('hero_kills');
            $table->unsignedSmallInteger('kraken_captures');
            $table->string('side', 16);
            $table->unsignedSmallInteger('turret_kills');
            $table->unsignedSmallInteger('turrets_remaining');
            $table->boolean('winner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roster');
    }
}
