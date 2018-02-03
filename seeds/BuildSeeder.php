<?php

use Illuminate\Database\Seeder;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('build')->insert([
            'id' => 1,
            'name' => 'all',
            'dimension_on' => 'global'
        ]);

        DB::table('build')->insert([
            'id' => 2,
            'name' => 'BP TM TM',
            'dimension_on' => 'global',
            'item_1' => 9,
            'item_2' => 64,
            'item_1_count' => 1,
            'item_2_count' => 2,
        ]);

        DB::table('build')->insert([
            'id' => 3,
            'name' => 'TB BP TM',
            'dimension_on' => 'global',
            'item_1' => 61,
            'item_2' => 9,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 4,
            'name' => 'SB BP TT',
            'dimension_on' => 'global',
            'item_1' => 9,
            'item_2' => 56,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 5,
            'name' => 'SM BP TM',
            'dimension_on' => 'global',
            'item_1' => 51,
            'item_2' => 9,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 6,
            'name' => 'SM BP SB',
            'dimension_on' => 'global',
            'item_1' => 51,
            'item_2' => 9,
            'item_3' => 56,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 7,
            'name' => 'SB BP TM',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 64,
            'item_3' => 9,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 8,
            'name' => 'SB TM TM',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 64,
            'item_1_count' => 1,
            'item_2_count' => 2,
        ]);

        DB::table('build')->insert([
            'id' => 9,
            'name' => 'BP SM PS',
            'dimension_on' => 'global',
            'item_1' => 9,
            'item_2' => 51,
            'item_3' => 47,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 10,
            'name' => 'TB SB TM',
            'dimension_on' => 'global',
            'item_1' => 61,
            'item_2' => 56,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 11,
            'name' => 'SB PS BP',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 47,
            'item_3' => 9,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 12,
            'name' => 'TB SB SB',
            'dimension_on' => 'global',
            'item_1' => 61,
            'item_2' => 56,
            'item_1_count' => 1,
            'item_2_count' => 2,
        ]);

        DB::table('build')->insert([
            'id' => 13,
            'name' => 'SB TT TM',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 62,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 14,
            'name' => 'SM TT SB',
            'dimension_on' => 'global',
            'item_1' => 51,
            'item_2' => 62,
            'item_3' => 56,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 15,
            'name' => 'AS BM AC',
            'dimension_on' => 'global',
            'item_1' => 2,
            'item_2' => 10,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 16,
            'name' => 'AS BM Eve',
            'dimension_on' => 'global',
            'item_1' => 2,
            'item_2' => 10,
            'item_3' => 23,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 17,
            'name' => 'Eve BM FB',
            'dimension_on' => 'global',
            'item_1' => 23,
            'item_2' => 10,
            'item_3' => 27,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 18,
            'name' => 'SG BM Eve',
            'dimension_on' => 'global',
            'item_1' => 23,
            'item_2' => 10,
            'item_3' => 52,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 19,
            'name' => 'SG CW BM',
            'dimension_on' => 'global',
            'item_1' => 52,
            'item_2' => 12,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 20,
            'name' => 'SC AS BM',
            'dimension_on' => 'global',
            'item_1' => 58,
            'item_2' => 2,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 21,
            'name' => 'AC FB BM',
            'dimension_on' => 'global',
            'item_1' => 3,
            'item_2' => 27,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);
        DB::table('build')->insert([
            'id' => 22,
            'name' => 'AS SG BM',
            'dimension_on' => 'global',
            'item_1' => 2,
            'item_2' => 52,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 23,
            'name' => 'AC SG BM',
            'dimension_on' => 'global',
            'item_1' => 3,
            'item_2' => 52,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 24,
            'name' => 'Eve BM AC',
            'dimension_on' => 'global',
            'item_1' => 23,
            'item_2' => 10,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

    }
}
