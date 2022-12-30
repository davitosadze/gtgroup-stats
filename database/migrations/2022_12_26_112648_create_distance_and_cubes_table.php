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
        Schema::create('distance_and_cubes', function (Blueprint $table) {
            $table->id();
            $table->double('km')->nullable()->default(0);
            $table->double('cube_price')->nullable()->default(0);
            $table->double('fuel_price')->nullable()->default(0);
            $table->double('loaded_cube')->nullable()->default(0);
            $table->double('road_price_1')->nullable()->default(0);
            $table->double('road_price_2')->nullable()->default(0);
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
        Schema::dropIfExists('distance_and_cubes');
    }
};
