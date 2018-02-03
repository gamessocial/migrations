<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeasonWinter2017 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('series')
            ->where('name', 'Autumn 2017')
            ->update([
                'end' => new DateTime('2017-12-05 16:00:00')
            ]);

        DB::table('series')->insert([
            'name' => 'Winter 2017',
            'dimension_on' => 'global',
            'start'=> new DateTime('2017-12-05 16:00:00'),
            'end' => Carbon::createFromDate(2020, 1, 1),
            'show_in_web' => true,
            'currentPatch' => 0
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
