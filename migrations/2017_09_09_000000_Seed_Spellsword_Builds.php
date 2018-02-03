<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSpellswordBuilds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('build')->insert([
            'id' => 43,
            'name' => 'SB SpS TM',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 73,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 44,
            'name' => 'SB SpS BP',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 73,
            'item_3' => 9,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 45,
            'name' => 'SB SpS PS',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 73,
            'item_3' => 47,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 46,
            'name' => 'SpS TB TT',
            'dimension_on' => 'global',
            'item_1' => 73,
            'item_2' => 61,
            'item_3' => 62,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 47,
            'name' => 'SpS TB TM',
            'dimension_on' => 'global',
            'item_1' => 73,
            'item_2' => 61,
            'item_3' => 64,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 48,
            'name' => 'SpS TB BP',
            'dimension_on' => 'global',
            'item_1' => 73,
            'item_2' => 61,
            'item_3' => 9,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 49,
            'name' => 'SB PS TB',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 47,
            'item_3' => 61,
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
