<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_team_user', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->index();                              // FK to Team table.
            $table->integer('vg_team_id')->index();                            // FK to League->Season table.

            $table->enum('membership', ['admin', 'captain', 'member', 'former']);
            $table->timestamp('joined_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('left_on')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_team_user');
    }
}
