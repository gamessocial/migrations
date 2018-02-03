<?php

use Carbon\Carbon;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemsModifySelectiveShow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->boolean("show_in_build")->nullable();
        });

        DB::table('item')
            ->update([
                'show_in_build' => true
            ]);

        DB::table('item')
            ->where('name', 'Healing Flask')
            ->update([
                'show_in_build' => false
            ]);

        DB::table('item')
            ->where('name', 'Scout Cam')
            ->update([
                'show_in_build' => false
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item', function (Blueprint $table) {
            $table->dropColumn("show_in_build");
        });
    }
}
