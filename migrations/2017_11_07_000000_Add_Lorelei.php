<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLorelei extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('hero')->insert([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => 'Lorelai',
            'api_name' => '*Lorelai*',
            'is_assassin' => false,
            'is_mage' => false,
            'is_protector' => true,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.10',
            'is_carry' =>  false,
            'is_jungler' => false,
            'is_captain' => true,
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
