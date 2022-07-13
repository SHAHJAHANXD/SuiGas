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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned('user_id')->index('user_id')->nullable('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('old_na_pp_op_cj')->nullable();
            $table->text('new_na_pp_op_cj')->nullable();
            $table->text('distt_region')->nullable();
            $table->text('job_number')->nullable();
            $table->text('dia')->nullable();
            $table->text('m_s_p_e')->nullable();
            $table->text('line_length_meter')->nullable();
            $table->text('line_description')->nullable();
            $table->text('drawing')->nullable();
            $table->text('stringing_today_feet')->nullable();
            $table->text('stringing_todate_feet')->nullable();
            $table->text('stringing_todate_kms')->nullable();
            $table->text('stringing_age')->nullable();
            $table->text('welding_fusion_today_feet')->nullable();
            $table->text('welding_fusion_todate_feet')->nullable();
            $table->text('welding_fusion_todate_meter')->nullable();
            $table->text('welding_fusion_age')->nullable();
            $table->text('welding_fusion_date')->nullable();
            $table->text('welding_fusion_this_f_y')->nullable();
            $table->text('tie_ins_crossing_today_feet')->nullable();
            $table->text('tie_ins_crossing_todate_feet')->nullable();
            $table->text('tie_ins_crossing_todate_kms')->nullable();
            $table->text('tie_ins_crossing_age')->nullable();
            $table->text('sleeving_today_feet')->nullable();
            $table->text('sleeving_todate_feet')->nullable();
            $table->text('sleeving_todate_kms')->nullable();
            $table->text('sleeving_age')->nullable();
            $table->text('trenching_today_feet')->nullable();
            $table->text('trenching_todate_feet')->nullable();
            $table->text('trenching_todate_kms')->nullable();
            $table->text('trenching_age')->nullable();
            $table->text('lowering_today_feet')->nullable();
            $table->text('lowering_todate_feet')->nullable();
            $table->text('lowering_todate_meter')->nullable()->nullable();
            $table->text('lowering_age')->nullable();
            $table->text('backfilling_today_feet')->nullable();
            $table->text('backfilling_todate_feet')->nullable();
            $table->text('backfilling_todate_kms')->nullable();
            $table->text('backfilling_age')->nullable();
            $table->text('backfilling_date')->nullable();
            $table->text('backfilling_f_y')->nullable();
            $table->text('status_1')->nullable();
            $table->text('two_noc_dept')->nullable();
            $table->text('partial_commissioning_meter_date')->nullable();
            $table->text('commissioning_meter_date')->nullable();
            $table->text('partial_commissioning_meter_this_fy')->nullable();
            $table->text('partial_commissioning_meter_total')->nullable();
            $table->text('commissioning_date')->nullable();
            $table->text('remarks')->nullable();
            $table->text('look_ahead_plan')->nullable();
            $table->text('welding_start_date')->nullable();
            $table->text('welding_end_date')->nullable();
            $table->text('lowering_start_date')->nullable();
            $table->text('lowering_end_date')->nullable();
            $table->text('testing_chart_completion_date')->nullable();
            $table->text('testing_chart_completion_time')->nullable();
            $table->text('partial_commissioning_date')->nullable();
            $table->text('comm_date')->nullable();
            $table->text('pipe_present_meter')->nullable();
            $table->text('pipe_required_meter')->nullable();
            $table->text('pipe_unwelded_pipe_at_site')->nullable();
            $table->text('contractor_and_payment_name')->nullable();
            $table->text('contractor_ppc_amount')->nullable();
            $table->text('ppc_amount_date')->nullable();
            $table->text('contractor_ppc_amount_paid')->nullable();
            $table->text('ppc_amount_paid_date')->nullable();
            $table->text('contractor_fpc_amount')->nullable();
            $table->text('fpc_amount_date')->nullable();
            $table->text('contractor_fpc_amount_paid')->nullable();
            $table->text('fpc_amount_paid_date')->nullable();
            $table->text('mna')->nullable();
            $table->text('job_holder')->nullable();
            $table->text('welding_material_booking_1_8_6010_kgs')->nullable();
            $table->text('welding_material_booking_5_32_7010_kgs')->nullable();
            $table->text('welding_material_booking_3_16_7010_kgs')->nullable();
            $table->text('welding_material_booking_cutting_disc_nos')->nullable();
            $table->text('welding_material_booking_grinding_disc_nos')->nullable();
            $table->text('welding_material_booking_power_brush_nos')->nullable();
            $table->text('budget')->nullable();
            $table->text('actual')->nullable();
            $table->text('balance')->nullable();
            $table->text('completion_report')->nullable();
            $table->text('completion_remarks')->nullable();
            $table->text('camp')->nullable();
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
        Schema::dropIfExists('records');
    }
};
