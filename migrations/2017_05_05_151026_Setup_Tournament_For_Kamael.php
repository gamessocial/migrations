<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupTournamentForKamael extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tournament')->insert([
            'name' => 'Kamael',
            'status' => 'planned',
            'type' => 'team',
            'start'=> Carbon::createFromDate(2017, 5, 6),
            'end'=> Carbon::createFromDate(2020, 5, 27),
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
