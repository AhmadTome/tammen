<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterBodyPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enter_body_parts_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body_num');
            $table->string('body_name');
            $table->string('body_hebrow')->nullable();
            $table->timestamps();
        });

        DB::statement('INSERT INTO enter_body_parts_copy (body_num,body_name,created_at,updated_at)
        SELECT body_num,body_name,created_at,updated_at FROM enter_body_parts');

        Schema::rename('enter_body_parts','old_enter_body_parts');
        Schema::rename('enter_body_parts_copy','enter_body_parts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enter_body_parts_copy');
    }
}
