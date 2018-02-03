<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_stats', function (Blueprint $table) {
            $table->increments('id');                           
            //$table->timestamp('updated_at');
            $table->timestamps();
            $table->boolean('final')->default(true);

            // foreign key: api id
            $table->uuid('participant_api_id')->index();

            // snapshot stats
            //$table->timestamp('created_at');
            $table->unsignedSmallInteger('kills')->nullable();
            $table->unsignedSmallInteger('deaths')->nullable();
            $table->unsignedSmallInteger('assists')->nullable();
            $table->unsignedMediumInteger('farm')->nullable();
            $table->unsignedSmallInteger('minion_kills')->nullable();
            $table->unsignedSmallInteger('jungle_kills')->nullable();
            $table->unsignedSmallInteger('non_jungle_minion_kills')->nullable();
            $table->unsignedSmallInteger('crystal_mine_captures')->nullable();
            $table->unsignedSmallInteger('gold_mine_captures')->nullable();
            $table->unsignedSmallInteger('kraken_captures')->nullable();
            $table->unsignedSmallInteger('turret_captures')->nullable();
            $table->unsignedMediumInteger('gold')->nullable();

            $table->unsignedTinyInteger('hero_level')->nullable();  // only via Telemetry!

            // traits
            $table->double('kda_ratio', 5, 5)->nullable();
            $table->double('kill_participation', 5, 5)->nullable();
            $table->double('cs_per_min', 7, 5)->nullable();
            $table->double('kills_per_min', 6, 5)->nullable();
            // scores - all int between 0 and 100
            // shared
            $table->double('impact_score')->nullable();
            $table->double('objective_score')->nullable();
            $table->double('damage_cp_score')->nullable();  // c & j
            $table->double('damage_wp_score')->nullable();  // c & j
            $table->double('sustain_score')->nullable();  // j & cpt
            // carry
            $table->double('farm_lane_score')->nullable();
            $table->double('kill_score')->nullable();
            $table->double('objective_lane_score')->nullable();
            // jungler
            $table->double('farm_jungle_score')->nullable();
            $table->double('peel_score')->nullable();
            $table->double('kill_assist_score')->nullable();
            $table->double('objective_jungle_score')->nullable();  // gold mine, sentry, Kraken
            // captain
            $table->double('vision_score')->nullable();
            $table->double('heal_score')->nullable();
            $table->double('assist_score')->nullable();
            $table->double('utility_score')->nullable();
            // meta
            $table->double('synergy_score')->nullable();
            $table->double('build_score')->nullable();
            $table->double('offmeta_score')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_stats');
    }
}
