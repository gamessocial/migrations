<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'all',
            'api_name' => '*All*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Vox',
            'api_name' => '*Vox*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Celeste',
            'api_name' => '*Celeste*',
            'is_assassin' => false,
            'is_mage' => true,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Catherine',
            'api_name' => '*Catherine*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Ringo',
            'api_name' => '*Ringo*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Adagio',
            'api_name' => '*Adagio*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Koshka',
            'api_name' => '*Koshka*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Glaive',
            'api_name' => '*Glaive*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Petal',
            'api_name' => '*Petal*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'SAW',
            'api_name' => '*SAW*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Krul',
            'api_name' => '*Krul*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Taka',
            'api_name' => '*Taka*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Skaarf',
            'api_name' => '*Skaarf*',
            'is_assassin' => false,
            'is_mage' => true,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Ardan',
            'api_name' => '*Ardan*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Fortress',
            'api_name' => '*Fortress*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Rona',
            'api_name' => '*Rona*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Skye',
            'api_name' => '*Skye*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Phinn',
            'api_name' => '*Phinn*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Blackfeather',
            'api_name' => '*Blackfeather*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

            DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Kestrel',
            'api_name' => '*Kestrel*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Reim',
            'api_name' => '*Reim*',
            'is_assassin' => false,
            'is_mage' => true,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Ozo',
            'api_name' => '*Ozo*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Alpha',
            'api_name' => '*Aplha*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Lance',
            'api_name' => '*Lance*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Samuel',
            'api_name' => '*Samuel*',
            'is_assassin' => false,
            'is_mage' => true,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Baron',
            'api_name' => '*Baron*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Gwen',
            'api_name' => '*Gwen*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => true,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Flicker',
            'api_name' => '*Flicker*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Idris',
            'api_name' => '*Idris*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Grumpjaw',
            'api_name' => '*Grumpjaw*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Lyra',
            'api_name' => '*Lyra*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Joule',
            'api_name' => '*Joule*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => true,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.2',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Baptiste',
            'api_name' => '*Baptiste*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.4',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Grace',
            'api_name' => '*Grace*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.6',
            'is_carry' =>  true,
            'is_jungler' => false,
            'is_captain' => false,
        ]);

        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Reza',
            'api_name' => '*Reza*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.7',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
        ]);

    }
}
