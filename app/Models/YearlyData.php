<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyData extends Model
{
    use HasFactory;
    protected $table = 'yearlydatachanges';
     protected $fillable = [
        'old_na_pp_op_cj',
        'new_na_pp_op_cj',
        'distt_region',
        'job_number',
        'dia',
        'm_s_p_e',
        'line_length_meter',
        'line_description',
        'drawing',
        'stringing_age',
        'welding_fusion_date',
        'welding_fusion_this_f_y',
        'tie_ins_crossing_age',
        'sleeving_age',
        'trenching_age',
        'backfilling_age',
        'backfilling_date',
        'backfilling_f_y',
        'partial_commissioning_meter_date',
        'commissioning_meter_date',
        'partial_commissioning_meter_this_fy',
        'partial_commissioning_meter_total',
        'commissioning_date',
        'welding_start_date',
        'welding_end_date',
        'lowering_start_date',
        'lowering_end_date',
        'testing_chart_completion_date',
        'testing_chart_completion_time',
        'partial_commissioning_date',
        'comm_date',
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
        'budget',
        'completion_report',
        'camp',

    ];
}
