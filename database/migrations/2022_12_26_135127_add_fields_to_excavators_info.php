<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('excavator_info', function (Blueprint $table) {
            $table->double('worked_hours')->nullable()->default(0);
            $table->double('hour_price')->nullable()->default(0);
            $table->double('cm_before_load')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('excavators_info', function (Blueprint $table) {
            //
        });
    }
};
