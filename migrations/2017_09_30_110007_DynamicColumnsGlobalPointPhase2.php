<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DynamicColumnsGlobalPointPhase2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
            $table->unsignedBigInteger('ability_a_level');
            $table->unsignedBigInteger('ability_b_level');
            $table->unsignedBigInteger('ability_c_level');
            $table->unsignedBigInteger('hero_level');
            $table->unsignedBigInteger('ability_a_use');
            $table->unsignedBigInteger('ability_b_use');
            $table->unsignedBigInteger('ability_c_use');
            $table->unsignedBigInteger('ability_a_damage_true');
            $table->unsignedBigInteger('ability_a_damage_dealt');
            $table->unsignedBigInteger('ability_b_damage_true');
            $table->unsignedBigInteger('ability_b_damage_dealt');
            $table->unsignedBigInteger('ability_c_damage_true');
            $table->unsignedBigInteger('ability_c_damage_dealt');
            $table->unsignedBigInteger('ability_perk_damage_true');
            $table->unsignedBigInteger('ability_perk_damage_dealt');
            $table->unsignedBigInteger('ability_aa_damage_true');
            $table->unsignedBigInteger('ability_aa_damage_dealt');
            $table->unsignedBigInteger('ability_aacrit_damage_true');
            $table->unsignedBigInteger('ability_aacrit_damage_dealt');
            $table->unsignedBigInteger('item_001_use');  // Aegis
            $table->unsignedBigInteger('item_004_use');  // Atlas
            $table->unsignedBigInteger('item_014_use');  // Contraption
            $table->unsignedBigInteger('item_015_use');  // Crucible
            $table->unsignedBigInteger('item_017_use');  // Crystal Infusion
            $table->unsignedBigInteger('item_018_use');  // Dragonblood Contract
            $table->unsignedBigInteger('item_020_use');  // Echo
            $table->unsignedBigInteger('item_024_use');  // Flare
            $table->unsignedBigInteger('item_025_use');  // Flare Gun
            $table->unsignedBigInteger('item_026_use');  // Fountain
            $table->unsignedBigInteger('item_028_use');  // Halcyon Chargers
            $table->unsignedBigInteger('item_029_use');  // Halcyon Potion
            $table->unsignedBigInteger('item_034_use');  // Journey Boots
            $table->unsignedBigInteger('item_041_use');  // Minion Candy
            $table->unsignedBigInteger('item_043_use');  // Nullwave Gauntlet
            $table->unsignedBigInteger('item_048_use');  // Protector Contract
            $table->unsignedBigInteger('item_049_use');  // Reflex Block
            $table->unsignedBigInteger('item_050_use');  // Scout Trap
            $table->unsignedBigInteger('item_053_use');  // Shiversteel
            $table->unsignedBigInteger('item_057_use');  // Sprint Boots
            $table->unsignedBigInteger('item_063_use');  // Travel Boots
            $table->unsignedBigInteger('item_066_use');  // War Treads
            $table->unsignedBigInteger('item_068_use');  // Weapon Infusion
            $table->unsignedBigInteger('item_069_use');  // Taunt Kissy
            $table->unsignedBigInteger('item_070_use');  // Taunt
            $table->unsignedBigInteger('item_071_use');  // Voice over Taunt
        });
    }


    public function down()
    {
        Schema::table('global_point_phase', function (Blueprint $table) {
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
            $table->dropColumn('item_001_use');  // Aegis
            $table->dropColumn('item_004_use');  // Atlas
            $table->dropColumn('item_014_use');  // Contraption
            $table->dropColumn('item_015_use');  // Crucible
            $table->dropColumn('item_017_use');  // Crystal Infusion
            $table->dropColumn('item_018_use');  // Dragonblood Contract
            $table->dropColumn('item_020_use');  // Echo
            $table->dropColumn('item_024_use');  // Flare
            $table->dropColumn('item_025_use');  // Flare Gun
            $table->dropColumn('item_026_use');  // Fountain
            $table->dropColumn('item_028_use');  // Halcyon Chargers
            $table->dropColumn('item_029_use');  // Halcyon Potion
            $table->dropColumn('item_034_use');  // Journey Boots
            $table->dropColumn('item_041_use');  // Minion Candy
            $table->dropColumn('item_043_use');  // Nullwave Gauntlet
            $table->dropColumn('item_048_use');  // Protector Contract
            $table->dropColumn('item_049_use');  // Reflex Block
            $table->dropColumn('item_050_use');  // Scout Trap
            $table->dropColumn('item_053_use');  // Shiversteel
            $table->dropColumn('item_057_use');  // Sprint Boots
            $table->dropColumn('item_063_use');  // Travel Boots
            $table->dropColumn('item_066_use');  // War Treads
            $table->dropColumn('item_068_use');  // Weapon Infusion
            $table->dropColumn('item_069_use');  // Taunt Kissy
            $table->dropColumn('item_070_use');  // Taunt
            $table->dropColumn('item_071_use');  // Voice over Taunt
            $table->dropColumn('item_072_use');  // Healing Flask
        });
    }
}
