<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');

            // API values - will be required later
            $table->string('shard_id')->nullable();
            $table->uuid('api_id')->nullable();
            $table->timestamp('created_at');

            $table->unsignedBigInteger('league_id')->nullable()->index();           // FK to tournaments's table

            $table->string('name', 20);
            $table->string('identifier', 10);
            $table->enum('status', ['planned', 'active', 'inactive']);
            $table->enum('type', ['team', 'guild', 'tournament']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
}
