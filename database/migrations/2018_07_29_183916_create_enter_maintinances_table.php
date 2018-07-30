<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterMaintinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enter_maintinances_copy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mai_num');
            $table->string('mai_name');
            $table->string('mai_hebrow_name')->nullable();
            $table->timestamps();
        });

        DB::statement('INSERT INTO enter_maintinances_copy (mai_num,mai_name,created_at,updated_at)
        SELECT mai_num,mai_name,created_at,updated_at FROM enter_maintinances');

        Schema::rename('enter_maintinances','old_enter_maintinances');
        Schema::rename('enter_maintinances_copy','enter_maintinances');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enter_maintinances_copy');
    }
}
