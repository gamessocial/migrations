<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SimplifyPhases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('participant_phases');
        Schema::create('participant_phases', function (Blueprint $table) {
            $table->increments('id');                           
            $table->timestamps();
            $table->unsignedSmallInteger('start');
            $table->unsignedSmallInteger('end');

            // foreign key: api id
            $table->uuid('participant_api_id')->index();
            $table->uuid('match_api_id')->index();

            // snapshot stats
            $table->double('dmg_true')->nullable();
            $table->double('dmg_dealt')->nullable();
            $table->double('dmg_rcvd_dealt')->nullable();
            $table->double('dmg_rcvd_true')->nullable();

            // other stats
            $table->integer('draft_position')->nullable();
            $table->integer('ban')->nullable();
            $table->integer('pick')->nullable();

            // healing stats
            $table->double('heal_heal')->nullable();
            $table->double('heal_healed')->nullable();
            $table->double('heal_rcvd_heal')->nullable();
            $table->double('heal_rcvd_healed')->nullable();
            $table->double('heal_rcvd_vamp')->nullable();

            $table->unique(['participant_api_id', 'start', 'end']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participant_phases');
        Schema::create('participant_phases', function (Blueprint $table) {
            $table->increments('id');                           
            $table->timestamps();
            $table->unsignedSmallInteger('start');
            $table->unsignedSmallInteger('end');

            // foreign key: api id
            $table->uuid('participant_api_id')->index();
            $table->uuid('match_api_id')->index();

            // snapshot stats
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
            $table->double('dmg_true_hero')->nullable();
            $table->double('dmg_true_kraken')->nullable();
            $table->double('dmg_true_turret')->nullable();
            $table->double('dmg_true_vain_turret')->nullable();
            $table->double('dmg_true_others')->nullable();
            $table->double('dmg_dealt_hero')->nullable();
            $table->double('dmg_dealt_kraken')->nullable();
            $table->double('dmg_dealt_turret')->nullable();
            $table->double('dmg_dealt_vain_turret')->nullable();
            $table->double('dmg_dealt_others')->nullable();

            $table->double('dmg_rcvd_dealt_hero')->nullable();
            $table->double('dmg_rcvd_true_hero')->nullable();
            $table->double('dmg_rcvd_dealt_others')->nullable();
            $table->double('dmg_rcvd_true_others')->nullable();

            $table->unsignedTinyInteger('ability_a_level')->nullable();
            $table->unsignedTinyInteger('ability_b_level')->nullable();
            $table->unsignedTinyInteger('ability_c_level')->nullable();

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

            $table->unique(['participant_api_id', 'start', 'end']);

            $table->integer('draft_position')->nullable();
            $table->integer('ban')->nullable();
            $table->integer('pick')->nullable();

            $table->double("heal_heal_hero")->nullable();
            $table->double("heal_healed_hero")->nullable();
            $table->double("heal_heal_ally")->nullable();
            $table->double("heal_healed_ally")->nullable();
            $table->double("heal_heal_other")->nullable();
            $table->double("heal_healed_other")->nullable();
            $table->double("heal_rcvd_heal_hero")->nullable();
            $table->double("heal_rcvd_healed_hero")->nullable();
            $table->double("heal_rcvd_heal_other")->nullable();
            $table->double("heal_rcvd_healed_other")->nullable();
            $table->double("heal_rcvd_heal_ally")->nullable();
            $table->double("heal_rcvd_healed_ally")->nullable();
            $table->double("heal_rcvd_healed_vamp")->nullable();

            $table->binary('items');
            $table->binary('item_grants');
            $table->binary('item_grants_inorder');
            $table->binary('item_sells');
            $table->unsignedSmallInteger('ability_a_use');
            $table->unsignedSmallInteger('ability_b_use');
            $table->unsignedSmallInteger('ability_c_use');
            $table->unsignedInteger('ability_a_damage_true');
            $table->unsignedInteger('ability_a_damage_dealt');
            $table->unsignedInteger('ability_b_damage_true');
            $table->unsignedInteger('ability_b_damage_dealt');
            $table->unsignedInteger('ability_c_damage_true');
            $table->unsignedInteger('ability_c_damage_dealt');
            $table->unsignedInteger('ability_perk_damage_true');
            $table->unsignedInteger('ability_perk_damage_dealt');
            $table->unsignedInteger('ability_aa_damage_true');
            $table->unsignedInteger('ability_aa_damage_dealt');
            $table->unsignedInteger('ability_aacrit_damage_true');
            $table->unsignedInteger('ability_aacrit_damage_dealt');
            $table->binary('item_uses');
            $table->binary('player_damage');
        });
    }
}
