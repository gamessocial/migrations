<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1063_Item_Aegis*',
            'name' => 'Aegis',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1050_Item_Aftershock*',
            'name' => 'Aftershock',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1069_Item_AlternatingCurrent*',
            'name' => 'Alternating Current',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1057_Item_AtlasPauldron*',
            'name' => 'Atlas Pauldron',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1060_Item_BarbedNeedle*',
            'name' => 'Barbed Needle',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1010_Item_BlazingSalvo*',
            'name' => 'Blazing Salvo',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1039_Item_Bonesaw*',
            'name' => 'Bonesaw',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1059_Item_BookOfEulogies*',
            'name' => 'Book of Eulogies',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1067_Item_BreakingPoint*',
            'name' => 'Breaking Point',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1055_Item_BrokenMyth*',
            'name' => 'Broken Myth',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1028_Item_Chronograph*',
            'name' => 'Chronograph',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1029_Item_Clockwork*',
            'name' => 'Clockwork',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1022_Item_CoatOfPlates*',
            'name' => 'Coat of Plates',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1079_Item_Contraption*',
            'name' => 'Contraption',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1046_Item_Crucible*',
            'name' => 'Crucible',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1003_Item_CrystalBit*',
            'name' => 'Crystal Bit',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1053_Item_CrystalInfusion*',
            'name' => 'Crystal Infusion',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1085_Item_DragonbloodContract*',
            'name' => 'Dragonblood Contract',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1016_Item_Dragonheart*',
            'name' => 'Dragonheart',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1097_Item_Echo*',
            'name' => 'Echo',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1009_Item_EclipsePrism*',
            'name' => 'Eclipse Prism',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1025_Item_EnergyBattery*',
            'name' => 'Energy Battery',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1071_Item_EveOfHarvest*',
            'name' => 'Eve of Harvest',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1038_Item_Flare*',
            'name' => 'Flare',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1088_Item_Flaregun*',
            'name' => 'Flare Gun',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1045_Item_FountainOfRenewal*',
            'name' => 'Fountain of Renewal',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1044_Item_Frostburn*',
            'name' => 'Frostburn',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1087_Item_HalcyonChargers*',
            'name' => 'Halcyon Chargers',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1000_Item_HalcyonPotion*',
            'name' => 'Halcyon Potion',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1072_Item_HeavyPrism*',
            'name' => 'Heavy Prism',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1065_Item_HeavySteel*',
            'name' => 'Heavy Steel',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1026_Item_Hourglass*',
            'name' => 'Hourglass',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1073_Item_IronguardContract*',
            'name' => 'Ironguard Contract',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1047_Item_JourneyBoots*',
            'name' => 'Journey Boots',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1062_Item_KineticShield*',
            'name' => 'Kinetic Shield',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1064_Item_Lifespring*',
            'name' => 'Lifespring',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1017_Item_LightArmor*',
            'name' => 'Light Armor',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1061_Item_LightShield*',
            'name' => 'Light Shield',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1068_Item_LuckyStrike*',
            'name' => 'Lucky Strike',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1024_Item_MetalJacket*',
            'name' => 'Metal Jacket',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1041_Item_MinionCandy*',
            'name' => 'Minion Candy',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1080_Item_MinionsFoot*',
            'name' => 'Minion\'s Foot',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1095_Item_NullwaveGauntlet*',
            'name' => 'Nullwave Gauntlet',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1015_Item_Oakheart*',
            'name' => 'Oakheart',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1070_Item_PiercingShard*',
            'name' => 'Piercing Shard',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1066_Item_PiercingSpear*',
            'name' => 'Piercing Spear',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1092_Item_PoisonedShiv*',
            'name' => 'Poisoned Shiv',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1084_Item_ProtectorContract*',
            'name' => 'Protector Contract',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1043_Item_ReflexBlock*',
            'name' => 'Reflex Block',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1054_Item_ScoutTrap*',
            'name' => 'Scout Trap',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1034_Item_SerpentMask*',
            'name' => 'Serpent Mask',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1013_Item_Shatterglass*',
            'name' => 'Shatterglass',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1042_Item_Shiversteel*',
            'name' => 'Shiversteel',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1005_Item_SixSins*',
            'name' => 'Six Sins',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1105_Item_SlumberingHusk*',
            'name' => 'Slumbering Husk',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1012_Item_Sorrowblade*',
            'name' => 'Sorrowblade',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1030_Item_SprintBoots*',
            'name' => 'Sprint Boots',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1090_Item_Stormcrown*',
            'name' => 'Stormcrown',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1074_Item_StormguardBanner*',
            'name' => 'Stormguard Banner',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1004_Item_SwiftShooter*',
            'name' => 'Swift Shooter',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1035_Item_TensionBow*',
            'name' => 'Tension Bow',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1014_Item_TornadoTrigger*',
            'name' => 'Tornado Trigger',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1032_Item_TravelBoots*',
            'name' => 'Travel Boots',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1049_Item_TyrantsMonocle*',
            'name' => 'Tyrant\'s Monocle' ,
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1027_Item_VoidBattery*',
            'name' => 'Void Battery',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1056_Item_WarTreads*',
            'name' => 'War Treads',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1002_Item_WeaponBlade*',
            'name' => 'Weapon Blade',
            'is_activable' => false
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1052_Item_WeaponInfusion*',
            'name' => 'Weapon Infusion',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1002_Item_CandyShop_Kissy*',
            'name' => 'Kissy',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1005_Item_CandyShop_Taunt*',
            'name' => 'Taunt',
            'is_activable' => true
        ]);

        DB::table('item')->insert([
            'series' => '0',
            'api_id' => '*1007_Item_CandyShop_VOTaunt*',
            'name' => 'Voice over Taunt',
            'is_activable' => true
        ]);

    }
}
