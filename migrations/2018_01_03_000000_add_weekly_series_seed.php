<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeeklySeriesSeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $now = Carbon::create(2018, 1, 3, 0, 0, 0);
        $nextweek = $now->copy()->addWeek()->subMinute();

        for($i = 0; $i <= 52; $i++) {
            $point_name = $now->year . '-' . $now->month . '-' . $now->day;
            DB::table('series')->insert([
                'name' => $point_name,
                'dimension_on' => 'global',
                'start'=> $now,
                'end'=> $nextweek,
                'show_in_web' => false
            ]);

            $now = $now->addWeek();
            $nextweek = $nextweek->addWeek();
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $now = Carbon::createFromDate(2018, 1, 3, 0, 0, 0);
        $nextweek = $now->copy()->addWeek();

        for($i = 0; $i <= 52; $i++) {
            $point_name = $now->year . '-' . $now->month . '-' . $now->day;
            $sql = 'delete from series where name = "' . $point_name . '"';
            DB::connection()->getPdo()->exec($sql);

            $now = $now->addWeek();
            $nextweek = $nextweek->addWeek();
        }
    }
}


