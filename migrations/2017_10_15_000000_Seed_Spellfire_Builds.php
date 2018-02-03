<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSpellfireBuilds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('build')->insert([
            'id' => 50,
            'name' => 'CW BM DE',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 10,
            'item_3' => 74,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 51,
            'name' => 'CW BM SF',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 10,
            'item_3' => 75,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 52,
            'name' => 'CW BM FB',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 10,
            'item_3' => 27,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 53,
            'name' => 'CW BM AS',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 10,
            'item_3' => 2,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 54,
            'name' => 'CW BM AC',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 10,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 55,
            'name' => 'CW SF SG',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 75,
            'item_3' => 52,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 56,
            'name' => 'CW FB SF',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 27,
            'item_3' => 75,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 57,
            'name' => 'CW FB AC',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 27,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 58,
            'name' => 'CW AS AC',
            'dimension_on' => 'global',
            'item_1' => 12,
            'item_2' => 2,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 59,
            'name' => 'Eve BM DE',
            'dimension_on' => 'global',
            'item_1' => 23,
            'item_2' => 10,
            'item_3' => 74,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 60,
            'name' => 'Eve BM SF',
            'dimension_on' => 'global',
            'item_1' => 23,
            'item_2' => 10,
            'item_3' => 75,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 61,
            'name' => 'DE FB AC',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 27,
            'item_3' => 3,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 62,
            'name' => 'DE AS BM',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 2,
            'item_3' => 10,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 63,
            'name' => 'DE AS CW',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 2,
            'item_3' => 12,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 64,
            'name' => 'DE AS FB',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 2,
            'item_3' => 27,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 65,
            'name' => 'DE AS Eve',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 2,
            'item_3' => 23,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 66,
            'name' => 'DE SG AS',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 52,
            'item_3' => 2,
            'item_1_count' => 1,
            'item_2_count' => 1,
            'item_3_count' => 1,
        ]);

        DB::table('build')->insert([
            'id' => 67,
            'name' => 'DE SG Eve',
            'dimension_on' => 'global',
            'item_1' => 74,
            'item_2' => 52,
            'item_3' => 23,
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
