<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReza extends Migration
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
            'name' => 'Reza',
            'api_name' => '*Reza*',
            'is_assassin' => true,
            'is_mage' => false,
            'is_protector' => false,
            'is_sniper' => false,
            'is_warrior' => false,
            'heroic_perk' => '',
            'ability_a' => '',
            'ability_b' => '',
            'ability_c' => '',
            'added_in_patch' => '2.7',
            'is_carry' =>  false,
            'is_jungler' => true,
            'is_captain' => false,
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
