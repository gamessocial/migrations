<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyHeroToHaveImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hero', function (Blueprint $table) {
            $table->string('avatar_location');
        });

        DB::table('hero')
            ->update([
                'avatar_location' => DB::raw("concat('/images/heroes/avatar/', lower(name), '.png')")
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hero', function (Blueprint $table) {
            $table->dropColumn('avatar_location');
        });
    }
}
