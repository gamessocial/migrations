<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id')->nullable();                  // tournament ID - assuming we get it some day from API

            $table->string('name');
            $table->string('tag_line_1')->nullable();
            $table->string('tag_line_2')->nullable();
            $table->enum('status', ['planned', 'active', 'finished']);    

            $table->enum('type', ['players', 'team']);
            $table->timestampTz('start')->nullable();
            $table->timestampTz('end')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournament');
    }
}
