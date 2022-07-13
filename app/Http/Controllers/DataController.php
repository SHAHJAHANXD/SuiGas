<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonthlyData;
use App\Models\YearlyData;
class DataController extends Controller
{
    public function data()
    {
        return view('suigas.monthlychange');
    }

    public function store(Request $request)
    {
        $user = MonthlyData::create([
            'status_1' => $request->status_1,
            'two_noc_dept' => $request->two_noc_dept,
            'look_ahead_plan' => $request->look_ahead_plan,
            'welding_material_booking_1_8_6010_kgs' => $request->welding_material_booking_1_8_6010_kgs,
            'welding_material_booking_5_32_7010_kgs' => $request->welding_material_booking_5_32_7010_kgs,
            'welding_material_booking_3_16_7010_kgs' => $request->welding_material_booking_3_16_7010_kgs,
            'welding_material_booking_cutting_disc_nos' => $request->welding_material_booking_cutting_disc_nos,
            'welding_material_booking_grinding_disc_nos' => $request->welding_material_booking_grinding_disc_nos,
            'welding_material_booking_power_brush_nos' => $request->welding_material_booking_power_brush_nos,
            'actual' => $request->actual,
            'balance' => $request->balance,
        ]);
        return redirect('allmonthlydatachange');
    }

    public function allmonthlydatachange()
    {
        $datachanges = MonthlyData::all();
        return view('suigas.allmonthlydatachange', compact('datachanges'));
    }

    public function monthlyedit($id)
    {
        $monthlychanges = MonthlyData::where('id', $id)->first();
        return view('suigas.monthlychangeedit', compact('monthlychanges'));
    }

    public function monthlyupdate(Request $request)
    {
        $monthlyupdate = MonthlyData::find($request->id);
        $monthlyupdate->status_1 = $request->status_1;
        $monthlyupdate->two_noc_dept = $request->two_noc_dept;
        $monthlyupdate->look_ahead_plan = $request->look_ahead_plan;
        $monthlyupdate->welding_material_booking_1_8_6010_kgs = $request->welding_material_booking_1_8_6010_kgs;
        $monthlyupdate->welding_material_booking_5_32_7010_kgs = $request->welding_material_booking_5_32_7010_kgs;
        $monthlyupdate->welding_material_booking_3_16_7010_kgs = $request->welding_material_booking_3_16_7010_kgs;
        $monthlyupdate->welding_material_booking_cutting_disc_nos = $request->welding_material_booking_cutting_disc_nos;
        $monthlyupdate->welding_material_booking_grinding_disc_nos = $request->welding_material_booking_grinding_disc_nos;
        $monthlyupdate->welding_material_booking_power_brush_nos = $request->welding_material_booking_power_brush_nos;
        $monthlyupdate->actual = $request->actual;
        $monthlyupdate->balance = $request->balance;
        $monthlyupdate->save();
        return redirect('allmonthlydatachange');
    }


    public function monthlydelete($id)
    {
        MonthlyData::find($id)->delete();
        return redirect('allmonthlydatachange');
    }


    public function createyearlydatachange()
    {
        return view('suigas.createyearlydatachange');
    }

    public function storeyearlydatachange(Request $request)
    {
        $user = YearlyData::create([
            'old_na_pp_op_cj' => $request->old_na_pp_op_cj,
            'new_na_pp_op_cj' => $request->new_na_pp_op_cj,
            'distt_region' => $request->distt_region,
            'job_number' => $request->job_number,
            'dia' => $request->dia,
            'm_s_p_e' => $request->m_s_p_e,
            'line_length_meter' => $request->line_length_meter,
            'line_description' => $request->line_description,
            'drawing' => $request->drawing,
            'stringing_age' => $request->stringing_age,
            'welding_fusion_date' => $request->welding_fusion_date,
            'welding_fusion_this_f_y' => $request->welding_fusion_this_f_y,
            'tie_ins_crossing_age' => $request->tie_ins_crossing_age,
            'sleeving_age' => $request->sleeving_age,
            'trenching_age' => $request->trenching_age,
            'backfilling_age' => $request->backfilling_age,
            'backfilling_date' => $request->backfilling_date,
            'backfilling_f_y' => $request->backfilling_f_y,
            'partial_commissioning_meter_date' => $request->partial_commissioning_meter_date,
            'commissioning_meter_date' => $request->commissioning_meter_date,
            'partial_commissioning_meter_this_fy' => $request->partial_commissioning_meter_this_fy,
            'partial_commissioning_meter_total' => $request->partial_commissioning_meter_total,
            'commissioning_date' => $request->commissioning_date,
            'welding_start_date' => $request->welding_start_date,
            'welding_end_date' => $request->welding_end_date,
            'lowering_start_date' => $request->lowering_start_date,
            'lowering_end_date' => $request->lowering_end_date,
            'testing_chart_completion_date' => $request->testing_chart_completion_date,
            'testing_chart_completion_time' => $request->testing_chart_completion_time,
            'partial_commissioning_date' => $request->partial_commissioning_date,
            'comm_date' => $request->comm_date,
            'contractor_and_payment_name' => $request->contractor_and_payment_name,
            'contractor_ppc_amount' => $request->contractor_ppc_amount,
            'ppc_amount_date' => $request->ppc_amount_date,
            'contractor_ppc_amount_paid' => $request->contractor_ppc_amount_paid,
            'ppc_amount_paid_date' => $request->ppc_amount_paid_date,
            'contractor_fpc_amount' => $request->contractor_fpc_amount,
            'fpc_amount_date' => $request->fpc_amount_date,
            'contractor_fpc_amount_paid' => $request->contractor_fpc_amount_paid,
            'fpc_amount_paid_date' => $request->fpc_amount_paid_date,
            'mna' => $request->mna,
            'job_holder' => $request->job_holder,
            'budget' => $request->budget,
            'completion_report' => $request->completion_report,
            'camp' => $request->camp,
        ]);
        return redirect('allyearlydatachange');
    }

    public function allyearlydatachange()
    {
        $YearlyDatum = YearlyData::all();
        return view('suigas.allyearlydatachange', compact('YearlyDatum'));
    }

    public function yearlyedit($id)
    {
        $yearlydatum = YearlyData::where('id', $id)->first();
        return view('suigas.yearlyedit', compact('yearlydatum'));
    }


    public function yearlyupdate(Request $request)
    {
        $records = YearlyData::find($request->id);
        $records->old_na_pp_op_cj = $request->old_na_pp_op_cj;
        $records->new_na_pp_op_cj = $request->new_na_pp_op_cj;
        $records->distt_region = $request->distt_region;
        $records->job_number = $request->job_number;
        $records->dia = $request->dia;
        $records->m_s_p_e = $request->m_s_p_e;
        $records->line_length_meter = $request->line_length_meter;
        $records->line_description = $request->line_description;
        $records->drawing = $request->drawing;
        $records->stringing_age = $request->stringing_age;
        $records->welding_fusion_date = $request->welding_fusion_date;
        $records->welding_fusion_this_f_y = $request->welding_fusion_this_f_y;
        $records->tie_ins_crossing_age = $request->tie_ins_crossing_age;
        $records->sleeving_age = $request->sleeving_age;
        $records->trenching_age = $request->trenching_age;
        $records->backfilling_age = $request->backfilling_age;
        $records->backfilling_date = $request->backfilling_date;
        $records->backfilling_f_y = $request->backfilling_f_y;
        $records->partial_commissioning_meter_date = $request->partial_commissioning_meter_date;
        $records->commissioning_meter_date = $request->commissioning_meter_date;
        $records->partial_commissioning_meter_this_fy = $request->partial_commissioning_meter_this_fy;
        $records->partial_commissioning_meter_total = $request->partial_commissioning_meter_total;
        $records->commissioning_date = $request->commissioning_date;
        $records->welding_start_date = $request->welding_start_date;
        $records->welding_end_date = $request->welding_end_date;
        $records->lowering_start_date = $request->lowering_start_date;
        $records->lowering_end_date = $request->lowering_end_date;
        $records->testing_chart_completion_date = $request->testing_chart_completion_date;
        $records->testing_chart_completion_time = $request->testing_chart_completion_time;
        $records->partial_commissioning_date = $request->partial_commissioning_date;
        $records->comm_date = $request->comm_date;
        $records->contractor_and_payment_name = $request->contractor_and_payment_name;
        $records->contractor_ppc_amount = $request->contractor_ppc_amount;
        $records->ppc_amount_date = $request->ppc_amount_date;
        $records->contractor_ppc_amount_paid = $request->contractor_ppc_amount_paid;
        $records->ppc_amount_paid_date = $request->ppc_amount_paid_date;
        $records->contractor_fpc_amount = $request->contractor_fpc_amount;
        $records->fpc_amount_date = $request->fpc_amount_date;
        $records->contractor_fpc_amount_paid = $request->contractor_fpc_amount_paid;
        $records->fpc_amount_paid_date = $request->fpc_amount_paid_date;
        $records->mna = $request->mna;
        $records->job_holder = $request->job_holder;
        $records->budget = $request->budget;
        $records->completion_report = $request->completion_report;
        $records->camp = $request->camp;
        $records->save();
        return redirect('allyearlydatachange');
    }

    public function yearlydelete($id)
    {
        YearlyData::find($id)->delete();
        return redirect('allyearlydatachange');
    }
}
