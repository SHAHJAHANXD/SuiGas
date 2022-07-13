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
        Schema::create('monthlydatachanges', function (Blueprint $table) {
            $table->id();
            $table->string('status_1')->nullable();
            $table->string('two_noc_dept')->nullable();
            $table->string('look_ahead_plan')->nullable();
            $table->string('welding_material_booking_1_8_6010_kgs')->nullable();
            $table->string('welding_material_booking_5_32_7010_kgs')->nullable();
            $table->string('welding_material_booking_3_16_7010_kgs')->nullable();
            $table->string('welding_material_booking_cutting_disc_nos')->nullable();
            $table->string('welding_material_booking_grinding_disc_nos')->nullable();
            $table->string('welding_material_booking_power_brush_nos')->nullable();
            $table->string('actual')->nullable();
            $table->string('balance')->nullable();
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
        Schema::dropIfExists('monthlydatachanges');
    }
};
