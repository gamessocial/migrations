<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('region')->insert([
        	'id' => 1,
            'name' => 'all',
        ]);

        DB::table('region')->insert([
            'id' => 2,
            'name' => 'sg',
        ]);

        DB::table('region')->insert([
            'id' => 3,
            'name' => 'na',
        ]);
        DB::table('region')->insert([
            'id' => 4,
            'name' => 'ea',
        ]);
        DB::table('region')->insert([
            'id' => 5,
            'name' => 'sa',
        ]);
        DB::table('region')->insert([
            'id' => 6,
            'name' => 'chn',
        ]);
        DB::table('region')->insert([
            'id' => 7,
            'name' => 'eu',
        ]);
    }
}
