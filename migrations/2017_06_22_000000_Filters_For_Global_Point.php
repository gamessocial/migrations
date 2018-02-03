<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiltersForGlobalPoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_point_filters', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('filter_id');
            $table->uuid('match_api_id');
        });

        Schema::table('build', function (Blueprint $table) {
            $table->string('database')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_point_filters');

        Schema::table('build', function (Blueprint $table) {
            $table->dropColumn('database');
        });
    }
}
