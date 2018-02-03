<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedBuilds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
            'item_1' => 56,
            'item_2' => 9,
            'item_3' => 62,
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

        DB::table('build')->insert([
            'id' => 25,
            'name' => 'PS TB BP',
            'dimension_on' => 'global',
            'item_1' => 47,
            'item_2' => 61,
            'item_3' => 9,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 26,
            'name' => 'BM AS Echo',
            'dimension_on' => 'global',
            'item_1' => 10,
            'item_2' => 2,
            'item_3' => 20,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 27,
            'name' => 'BM Eve Echo',
            'dimension_on' => 'global',
            'item_1' => 10,
            'item_2' => 23,
            'item_3' => 20,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 28,
            'name' => 'BM AC Echo',
            'dimension_on' => 'global',
            'item_1' => 10,
            'item_2' => 3,
            'item_3' => 20,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 29,
            'name' => 'BM SG Echo',
            'dimension_on' => 'global',
            'item_1' => 10,
            'item_2' => 52,
            'item_3' => 20,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 30,
            'name' => 'SB TB TT',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 61,
            'item_3' => 62,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
