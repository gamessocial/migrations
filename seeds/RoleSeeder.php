<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([
        	'id' => 1,
            'name' => 'all',
        ]);

        DB::table('role')->insert([
            'id' => 2,
            'name' => 'carry',
        ]);

        DB::table('role')->insert([
            'id' => 3,
            'name' => 'jungler',
        ]);
        DB::table('role')->insert([
            'id' => 4,
            'name' => 'captain',
        ]);
    }
}
