<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedBuilds02 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('build')->insert([
            'id' => 31,
            'name' => 'FoR CR Contrap',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 14,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 32,
            'name' => 'FoR CR AP',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 4,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 33,
            'name' => 'FoR CR SC',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 58,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 34,
            'name' => 'FoR CR WT',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 66,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 35,
            'name' => 'FoR CR Echo',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 20,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 36,
            'name' => 'FoR CR CW',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 12,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 37,
            'name' => 'FoR CR NW',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 43,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 38,
            'name' => 'FoR CR SS',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 53,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 39,
            'name' => 'FoR CR HC',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 28,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 40,
            'name' => 'FoR CR PS',
            'dimension_on' => 'global',
            'item_1' => 26,
            'item_2' => 15,
            'item_3' => 47,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 41,
            'name' => 'SM BP BS',
            'dimension_on' => 'global',
            'item_1' => 51,
            'item_2' => 9,
            'item_3' => 7,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 42,
            'name' => 'SB BP BS',
            'dimension_on' => 'global',
            'item_1' => 56,
            'item_2' => 9,
            'item_3' => 7,
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
