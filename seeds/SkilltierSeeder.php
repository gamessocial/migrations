<?php

use Illuminate\Database\Seeder;

class SkilltierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skill_tier')->insert([
            'name' => 'all',
            'start'=> -1,
            'end'=> 30,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Unranked',
            'start'=> -1,
            'end'=> -1,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Just Beginning',
            'start'=> 0,
            'end'=> 2,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Getting There',
            'start'=> 3,
            'end'=> 5,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Rock Solid',
            'start'=> 6,
            'end'=> 8,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Worthy Foe',
            'start'=> 9,
            'end'=> 11,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Got Swagger',
            'start'=> 12,
            'end'=> 14,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Credible Threat',
            'start'=> 15,
            'end'=> 17,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'The Hotness',
            'start'=> 18,
            'end'=> 20,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Simply Amazing',
            'start'=> 21,
            'end'=> 23,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Pinnacle Of Awesome',
            'start'=> 24,
            'end'=> 26,
        ]);

        DB::table('skill_tier')->insert([
            'name' => 'Vainglorious',
            'start'=> 27,
            'end'=> 29,
        ]);
    }
}
