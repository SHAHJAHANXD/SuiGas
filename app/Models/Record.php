<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable = [
        'user_id',
        'old_na_pp_op_cj',
        'new_na_pp_op_cj',
        'distt_region',
        'job_number',
        'dia',
        'm_s_p_e',
        'line_length_meter',
        'line_description',
        'drawing',
        'stringing_today_feet',
        'stringing_todate_feet',
        'stringing_todate_kms',
        'stringing_age',
        'welding_fusion_today_feet',
        'welding_fusion_todate_feet',
        'welding_fusion_todate_meter',
        'welding_fusion_age',
        'welding_fusion_date',
        'welding_fusion_this_f_y',
        'tie_ins_crossing_today_feet',
        'tie_ins_crossing_todate_feet',
        'tie_ins_crossing_todate_kms',
        'tie_ins_crossing_age',
        'sleeving_today_feet',
        'sleeving_todate_feet',
        'sleeving_todate_kms',
        'sleeving_age',
        'trenching_today_feet',
        'trenching_todate_feet',
        'trenching_todate_kms',
        'trenching_age',
        'lowering_today_feet',
        'lowering_todate_feet',
        'lowering_todate_meter',
        'lowering_age',
        'backfilling_today_feet',
        'backfilling_todate_feet',
        'backfilling_todate_kms',
        'backfilling_age',
        'backfilling_date',
        'backfilling_f_y',
        'status_1',
        'two_noc_dept',
        'partial_commissioning_meter_date',
        'commissioning_meter_date',
        'partial_commissioning_meter_this_fy',
        'partial_commissioning_meter_total',
        'commissioning_date',
        'remarks',
        'look_ahead_plan',
        'welding_start_date',
        'welding_end_date',
        'lowering_start_date',
        'lowering_end_date',
        'testing_chart_completion_date',
        'testing_chart_completion_time',
        'partial_commissioning_date',
        'comm_date',
        'pipe_present_meter',
        'pipe_required_meter',
        'pipe_unwelded_pipe_at_site',
        'contractor_and_payment_name',
        'contractor_ppc_amount',
        'ppc_amount_date',
        'contractor_ppc_amount_paid',
        'ppc_amount_paid_date',
        'contractor_fpc_amount',
        'fpc_amount_date',
        'contractor_fpc_amount_paid',
        'fpc_amount_paid_date',
        'mna',
        'job_holder',
        'welding_material_booking_1_8_6010_kgs',
        'welding_material_booking_5_32_7010_kgs',
        'welding_material_booking_3_16_7010_kgs',
        'welding_material_booking_cutting_disc_nos',
        'welding_material_booking_grinding_disc_nos',
        'welding_material_booking_power_brush_nos',
        'budget',
        'actual',
        'balance',
        'completion_report',
        'completion_remarks',
        'camp',

    ];

     public function users()
     {
         return $this->hasMany('User');
     }


}
