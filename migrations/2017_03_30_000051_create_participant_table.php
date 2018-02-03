<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');

            // uuid
            $table->string('shard_id');
            $table->uuid('api_id')->unique();

            // relationships
            $table->uuid('player_api_id')->index();
            $table->uuid('roster_api_id')->index();
            $table->uuid('match_api_id')->index();

            // mappings
            $table->unsignedInteger('hero_id')->index();
            $table->unsignedInteger('series_id')->index();
            $table->unsignedInteger('game_mode_id')->index();
            $table->unsignedInteger('role_id')->index();
            $table->unsignedInteger('filter_id')->index();

            // API data
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('actor', 16);
            $table->double('first_afk_time', 12, 4);
            $table->unsignedTinyInteger('karma_level');
            $table->unsignedTinyInteger('level');
            $table->smallInteger('skill_tier');
            $table->string('skin_key', 40);
            $table->boolean('went_afk');
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
        Schema::dropIfExists('participant');
    }
}
