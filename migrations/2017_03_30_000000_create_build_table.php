<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('item_1')->nullable();
            $table->string('item_2')->nullable();
            $table->string('item_3')->nullable();
            $table->string('item_4')->nullable();
            $table->string('item_5')->nullable();
            $table->string('item_6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('build');
    }
}
