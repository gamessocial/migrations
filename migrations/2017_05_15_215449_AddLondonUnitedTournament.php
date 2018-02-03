<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLondonUnitedTournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournament', function (Blueprint $table) {
            $table->string('region')->nullable();
        });

        DB::table('tournament')->insert([
            'api_id' => 'evil-8-london-spring',
            'name' => 'London United',
            'status' => 'planned',
            'type' => 'team',
            'start'=> Carbon::createFromDate(2017, 5, 18, 0, 0 , 0),
            'end'=> Carbon::createFromDate(2020, 5, 23, 0, 0, 0),
            'region'=> 'tournament-eu',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tournament')
             ->where('name', '=', 'London United')
             ->delete();

        Schema::table('tournament', function (Blueprint $table) {
            $table->dropColumn('region');
        });
     }
}
