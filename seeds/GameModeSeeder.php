<?php

use Illuminate\Database\Seeder;

class GameModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('game_mode')->insert([
         'id' => 1,
           'name' => 'all',
       ]);

       DB::table('game_mode')->insert([
           'id' => 2,
           'name' => 'casual',
       ]);

       DB::table('game_mode')->insert([
           'id' => 3,
           'name' => 'ranked',
       ]);

       DB::table('game_mode')->insert([
           'id' => 4,
           'name' => 'blitz_pvp_ranked',
       ]);

       DB::table('game_mode')->insert([
           'id' => 5,
           'name' => 'casual_aral',
       ]);

       DB::table('game_mode')->insert([
           'id' => 6,
           'name' => 'private',
       ]);

       DB::table('game_mode')->insert([
           'id' => 7,
           'name' => 'private_ranked',
       ]);

       DB::table('game_mode')->insert([
           'id' => 8,
           'name' => 'private_party_blitz_match',
       ]);

       DB::table('game_mode')->insert([
           'id' => 9,
           'name' => 'private_party_aral_match',
       ]);

    }
}
