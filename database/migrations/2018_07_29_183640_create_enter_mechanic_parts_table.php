<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterMechanicPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enter_mechanic_parts_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mec_name');
            $table->string('mec_num');
            $table->string('mec_hebrow')->nullable();
            $table->timestamps();
        });

        DB::statement('INSERT INTO enter_mechanic_parts_copy (mec_num,mec_name,created_at,updated_at)
        SELECT mec_num,mec_name,created_at,updated_at FROM enter_mechanic_parts');

        Schema::rename('enter_mechanic_parts','old_enter_mechanic_parts');
        Schema::rename('enter_mechanic_parts_copy','enter_mechanic_parts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enter_mechanic_parts_copy');
    }
}
