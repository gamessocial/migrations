<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhaseItemGrantsInorder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->binary('item_grants_inorder')->after('item_grants')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('participant_phases', function (Blueprint $table) {
            $table->dropColumn('item_grants_inorder');
        });

    }
}
