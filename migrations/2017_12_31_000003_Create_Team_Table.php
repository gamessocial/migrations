<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vg_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('slug', 10);

            $table->string('shard_id')->nullable();
            $table->timestamp('created_at')->nullable();

            $table->enum('status', ['active', 'inactive']);
            $table->enum('type', ['team', 'guild']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vg_team');
    }
}
