<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_season', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 10);

            $table->integer('league_id')->index();                              // FK to League table.

            $table->string('name');
            $table->enum('status', ['planned', 'pre-season', 'in-season', 'post-season']);    
            $table->timestampTz('start')->nullable();
            $table->timestampTz('end')->nullable();

            $table->string('prize_pool')->nullable();

            // registration cols.
            $table->boolean('roster_locked')->nullable();
            $table->boolean('registration_open')->nullable();
            $table->string('regis_intro', 1000)->nullable();
            $table->string('regis_requirements', 1000)->nullable();
            $table->string('regis_link_intro', 255)->nullable();
            $table->string('regis_link_rules', 255)->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_season');
    }
}
