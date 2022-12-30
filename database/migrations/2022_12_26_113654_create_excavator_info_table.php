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
        Schema::create('excavator_info', function (Blueprint $table) {
            $table->id();
            $table->string("excavator_id")->default(0)->nullable();
            $table->double("cm_current")->default(0)->nullable();
            $table->double("cm_morning")->default(0)->nullable();
            $table->double("cm_evening")->default(0)->nullable();
            $table->double("cm_after_load_expected")->default(0)->nullable();
            $table->double("cm_after_load_actual")->default(0)->nullable();
            $table->double("loaded_fuel")->default(0)->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excavator_info');
    }
};
