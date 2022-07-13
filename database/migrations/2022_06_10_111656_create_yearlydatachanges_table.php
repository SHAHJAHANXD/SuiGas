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
        Schema::create('yearlydatachanges', function (Blueprint $table) {
            $table->id();
            $table->string('old_na_pp_op_cj')->nullable();
            $table->string('new_na_pp_op_cj')->nullable();
            $table->string('distt_region')->nullable();
            $table->string('job_number')->nullable();
            $table->string('dia')->nullable();
            $table->string('m_s_p_e')->nullable();
            $table->string('line_length_meter')->nullable();
            $table->string('line_description')->nullable();
            $table->string('drawing')->nullable();
            $table->string('stringing_age')->nullable();
            $table->string('welding_fusion_date')->nullable();
            $table->string('welding_fusion_this_f_y')->nullable();
            $table->string('tie_ins_crossing_age')->nullable();
            $table->string('sleeving_age')->nullable();
            $table->string('trenching_age')->nullable();
            $table->string('backfilling_age')->nullable();
            $table->string('backfilling_date')->nullable();
            $table->string('backfilling_f_y')->nullable();
            $table->string('partial_commissioning_meter_date')->nullable();
            $table->string('commissioning_meter_date')->nullable();
            $table->string('partial_commissioning_meter_this_fy')->nullable();
            $table->string('partial_commissioning_meter_total')->nullable();
            $table->string('commissioning_date')->nullable();
            $table->string('welding_start_date')->nullable();
            $table->string('welding_end_date')->nullable();
            $table->string('lowering_start_date')->nullable();
            $table->string('lowering_end_date')->nullable();
            $table->string('testing_chart_completion_date')->nullable();
            $table->string('testing_chart_completion_time')->nullable();
            $table->string('partial_commissioning_date')->nullable();
            $table->string('comm_date')->nullable();
            $table->string('contractor_and_payment_name')->nullable();
            $table->string('contractor_ppc_amount')->nullable();
            $table->string('ppc_amount_date')->nullable();
            $table->string('contractor_ppc_amount_paid')->nullable();
            $table->string('ppc_amount_paid_date')->nullable();
            $table->string('contractor_fpc_amount')->nullable();
            $table->string('fpc_amount_date')->nullable();
            $table->string('contractor_fpc_amount_paid')->nullable();
            $table->string('fpc_amount_paid_date')->nullable();
            $table->string('mna')->nullable();
            $table->string('job_holder')->nullable();
            $table->string('budget')->nullable();
            $table->string('completion_report')->nullable();
            $table->string('camp')->nullable();
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
        Schema::dropIfExists('yearlydatachanges');
    }
};
