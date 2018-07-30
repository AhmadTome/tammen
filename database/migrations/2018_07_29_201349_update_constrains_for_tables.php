<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateConstrainsForTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maintenance_vehicle_work',function(Blueprint $table){
            $table->dropForeign('FK_maintenance_vehicle_work_2');
        });

        Schema::table('mechanic_vehicle_works',function(Blueprint $table){
            $table->dropForeign('FK_mechanic_vehicle_works_2');
        });

        Schema::table('body_vehicle_works',function(Blueprint $table){
            $table->dropForeign('FK_body_vehicle_works_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
