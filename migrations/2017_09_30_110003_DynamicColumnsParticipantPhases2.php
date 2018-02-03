<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DynamicColumnsParticipantPhases2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->binary('items');
            $table->binary('item_grants');
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

    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn('items');
            $table->dropColumn('item_grants');
            $table->dropColumn('item_sells');
            $table->dropColumn('ability_a_use');
            $table->dropColumn('ability_b_use');
            $table->dropColumn('ability_c_use');
            $table->dropColumn('ability_a_damage_true');
            $table->dropColumn('ability_a_damage_dealt');
            $table->dropColumn('ability_b_damage_true');
            $table->dropColumn('ability_b_damage_dealt');
            $table->dropColumn('ability_c_damage_true');
            $table->dropColumn('ability_c_damage_dealt');
            $table->dropColumn('ability_perk_damage_true');
            $table->dropColumn('ability_perk_damage_dealt');
            $table->dropColumn('ability_aa_damage_true');
            $table->dropColumn('ability_aa_damage_dealt');
            $table->dropColumn('ability_aacrit_damage_true');
            $table->dropColumn('ability_aacrit_damage_dealt');
            $table->dropColumn('item_uses');
            $table->dropColumn('player_damage');
        });
    }
}
