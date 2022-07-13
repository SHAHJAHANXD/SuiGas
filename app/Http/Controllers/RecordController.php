<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Record;
use App\Models\MonthlyData;
use App\Models\YearlyData;
use Auth;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\PDF;

class RecordController extends Controller
{
    public function createrecord()
    {
        $monthlydatum = MonthlyData::first();
        $yealydata = YearlyData::first();
        return view('suigas.createrecord', compact('monthlydatum', 'yealydata'));
    }
    public function getpdf($job)
    {

        $records = Record::where('job_number', $job)->first();
        // $records['records'] = Record::where('job_number', $job)->first();
        $pdf = \PDF::loadHtml('
        <style>
        html
        {
            border: skyblue;
        }
        body
        {
            border: skyblue;
        }
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          margin-top: 10px;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: center;
          padding: 8px;
        }
            h1
            {
                background: black;
                color: white;
            }

        </style>

        <h1 align="center">Project Department</h1>
        <h2 align="center">Distribution Line Status</h2>
        <h2 align="center">Job ID ' . $job  . '</h2>

                                    <table>
                                        <tr>
                                            <th>(OLD)NA/PP OP/CJ</th>
                                            <th>(New)NA/PP OP/CJ</th>
                                            <th>Distt / Region</th>
                                            <th>Job Number</th>
                                        </tr>
                                        <tr>
                                        <td>' . $records->old_na_pp_op_cj  . '</td>
                                        <td>' . $records->new_na_pp_op_cj  . '</td>
                                        <td>' . $records->distt_region  . '</td>
                                        <td>' . $records->job_number  . '</td>
                                      </tr>
                                    </table>
                                    <table>
                                    <tr>
                                        <th>Dia</th>
                                        <th>M.S.P.E.</th>
                                        <th>Line Length meter</th>
                                        <th>Drawing</th>
                                    </tr>
                                    <tr>
                                    <td>' . $records->dia  . '</td>
                                    <td>' . $records->m_s_p_e  . '</td>
                                    <td>' . $records->line_length_meter  . '</td>
                                    <td>' . $records->drawing  . '</td>
                                  </tr>
                                </table>
                                <table>
                                <tr>
                                    <th>Line Description</th>
                                </tr>
                                <tr>
                                <td>' . $records->line_description  . '</td>
                              </tr>
                            </table>
                            <h2 align="center">Stringing & Welding / Fusion</h2>
                            <table>
                            <tr>
                                <th>Stringing Age %</th>
                                <th>Welding / Fusion Date</th>
                                <th>Welding / Fusion F.Y.</th>
                            </tr>
                            <tr>
                            <td>' . $records->stringing_age  . '</td>
                            <td>' . $records->welding_fusion_date  . '</td>
                            <td>' . $records->welding_fusion_this_f_y  . '</td>
                          </tr>
                        </table>
                        <h2 align="center">Tie-Ins / Crossings, Sleeving & Trenching</h2>
                        <table>
                        <tr>
                            <th>Tie-Ins / Crossings Age</th>
                            <th>Sleeving Age</th>
                            <th>Trenching Age</th>
                        </tr>
                        <tr>
                        <td>' . $records->tie_ins_crossing_age  . '</td>
                        <td>' . $records->sleeving_age  . '</td>
                        <td>' . $records->trenching_age  . '</td>
                      </tr>
                    </table>
                    <h2 align="center">Backfilling</h2>
                    <table>
                    <tr>
                        <th>Backfilling Age</th>
                        <th>Backfilling Date</th>
                        <th>Backfilling F.Y.</th>
                    </tr>
                    <tr>
                    <td>' . $records->backfilling_age  . '</td>
                    <td>' . $records->backfilling_date  . '</td>
                    <td>' . $records->backfilling_f_y  . '</td>
                  </tr>
                </table>
                <h2 align="center">Partial Commissioning</h2>
                <table>
                <tr>
                    <th>Partial Commissioning (meter) Date Monthly</th>
                    <th>Commissioning (meter) Date Monthly</th>
                    <th>Partial Commissioning (meter) This FY</th>
                    <th>Drawing</th>
                </tr>
                <tr>
                <td>' . $records->partial_commissioning_meter_date  . '</td>
                <td>' . $records->commissioning_meter_date  . '</td>
                <td>' . $records->partial_commissioning_meter_this_fy  . '</td>
              </tr>
            </table>
            <h2 align="center"></h2>
            <table>
            <tr>
                <th>Partial Commissioning (meter) Total</th>
                <th>Commissioning Date</th>
            </tr>
            <tr>
            <td>' . $records->partial_commissioning_meter_total  . '</td>
            <td>' . $records->commissioning_date  . '</td>
          </tr>
        </table>
        <h2 align="center">Welding &  Lowering</h2>
        <table>
        <tr>
            <th>Welding Start Date</th>
            <th>Welding End Date</th>
            <th>Lowering Start Date</th>
            <th>Lowering End Date</th>
        </tr>
        <tr>
        <td>' . $records->welding_start_date  . '</td>
        <td>' . $records->welding_end_date  . '</td>
        <td>' . $records->lowering_start_date  . '</td>
        <td>' . $records->lowering_end_date  . '</td>
      </tr>
    </table>
    <h2 align="center">Testing Chart Completion, Partial & Comm</h2>
      <table>
    <tr>
        <th>Testing Chart Completion Date</th>
        <th>Testing Chart Completion Time</th>
        <th>Comm (Date)</th>
    </tr>
    <tr>
    <td>' . $records->testing_chart_completion_date  . '</td>
    <td>' . $records->testing_chart_completion_time  . '</td>
    <td>' . $records->partial_commissioning_date  . '</td>
    <td>' . $records->comm_date  . '</td>

  </tr>
</table>
<h2 align="center">Contractor and Payment</h2>
  <table>
<tr>
    <th>Contractor and Payment Name</th>
    <th>Contractor PPC Amount</th>
    <th>PPC Amount Date</th>
</tr>
<tr>
<td>' . $records->contractor_and_payment_name  . '</td>
<td>' . $records->contractor_ppc_amount  . '</td>
<td>' . $records->ppc_amount_date  . '</td>

</tr>
</table>

<table>
<tr>
    <th>PPC Amount Paid</th>
    <th>PPC Amount Paid Date</th>
    <th>FPC Amount</th>
    <th>FPC Amount Date</th>
</tr>
<tr>
<td>' . $records->contractor_ppc_amount_paid  . '</td>
<td>' . $records->ppc_amount_paid_date  . '</td>
<td>' . $records->contractor_fpc_amount  . '</td>
<td>' . $records->fpc_amount_date  . '</td>
</tr>
</table>
<table>
<tr>
    <th>FPC Amount Paid</th>
    <th>FPC Amount Paid Date</th>
    <th>MNA</th>
    <th>JOB HOLDER</th>
</tr>
<tr>
<td>' . $records->contractor_fpc_amount_paid  . '</td>
<td>' . $records->fpc_amount_paid_date  . '</td>
<td>' . $records->mna  . '</td>
<td>' . $records->job_holder  . '</td>
</tr>
</table>
<h2 align="center">BUDGET</h2>
  <table>
<tr>
    <th>BUDGET</th>
    <th>COMPLETION REPORT</th>
    <th>Camp</th>
</tr>
<tr>
<td>' . $records->budget  . '</td>
<td>' . $records->completion_report  . '</td>
<td>' . $records->camp  . '</td>
</tr>
</table>
                                    <h2 align="center" style="margin-bottom: auto;">Copyright © Designed & Developed by SNGPL 2022</h2>

 ');
        return $pdf->download('Report_No_' . $job  . '.pdf');
    }
    public function storerecord(Request $request)
    {
        $id = Auth::user()->id;

        $admin_id = Auth::user()->admin_id;

        $records = new Record();
        $records->old_na_pp_op_cj = $request->old_na_pp_op_cj;
        $records->new_na_pp_op_cj = $request->new_na_pp_op_cj;
        $records->distt_region = $request->distt_region;
        $records->job_number = $request->job_number;
        $records->dia = $request->dia;
        $records->m_s_p_e = $request->m_s_p_e;
        $records->line_length_meter = $request->line_length_meter;
        $records->line_description = $request->line_description;
        $records->drawing = $request->drawing;
        $records->stringing_today_feet = $request->stringing_today_feet;
        $records->stringing_todate_feet = $request->stringing_todate_feet;
        $records->stringing_todate_kms = $request->stringing_todate_kms;
        $records->stringing_age = $request->stringing_age;
        $records->welding_fusion_today_feet = $request->welding_fusion_today_feet;
        $records->welding_fusion_todate_feet = $request->welding_fusion_todate_feet;
        $records->welding_fusion_todate_meter = $request->welding_fusion_todate_meter;
        $records->welding_fusion_age = $request->welding_fusion_age;
        $records->welding_fusion_date = $request->welding_fusion_date;
        $records->welding_fusion_this_f_y = $request->welding_fusion_this_f_y;
        $records->tie_ins_crossing_today_feet = $request->tie_ins_crossing_today_feet;
        $records->tie_ins_crossing_todate_feet = $request->tie_ins_crossing_todate_feet;
        $records->tie_ins_crossing_todate_kms = $request->tie_ins_crossing_todate_kms;
        $records->tie_ins_crossing_age = $request->tie_ins_crossing_age;
        $records->sleeving_today_feet = $request->sleeving_today_feet;
        $records->sleeving_todate_feet = $request->sleeving_todate_feet;
        $records->sleeving_todate_kms = $request->sleeving_todate_kms;
        $records->sleeving_age = $request->sleeving_age;
        $records->trenching_today_feet = $request->trenching_today_feet;
        $records->trenching_todate_feet = $request->trenching_todate_feet;
        $records->trenching_todate_kms = $request->trenching_todate_kms;
        $records->trenching_age = $request->trenching_age;
        $records->lowering_today_feet = $request->lowering_today_feet;
        $records->lowering_todate_feet = $request->lowering_todate_feet;
        $records->lowering_todate_meter = $request->lowering_todate_meter;
        $records->lowering_age = $request->lowering_age;
        $records->backfilling_today_feet = $request->backfilling_today_feet;
        $records->backfilling_todate_feet = $request->backfilling_todate_feet;
        $records->backfilling_todate_kms = $request->backfilling_todate_kms;
        $records->backfilling_age = $request->backfilling_age;
        $records->backfilling_date = $request->backfilling_date;
        $records->backfilling_f_y = $request->backfilling_f_y;
        $records->status_1 = $request->status_1;
        $records->two_noc_dept = $request->two_noc_dept;
        $records->partial_commissioning_meter_date = $request->partial_commissioning_meter_date;
        $records->commissioning_meter_date = $request->commissioning_meter_date;
        $records->partial_commissioning_meter_this_fy = $request->partial_commissioning_meter_this_fy;
        $records->partial_commissioning_meter_total = $request->partial_commissioning_meter_total;
        $records->commissioning_date = $request->commissioning_date;
        $records->remarks = $request->remarks;
        $records->look_ahead_plan = $request->look_ahead_plan;
        $records->welding_start_date = $request->welding_start_date;
        $records->welding_end_date = $request->welding_end_date;
        $records->lowering_start_date = $request->lowering_start_date;
        $records->lowering_end_date = $request->lowering_end_date;
        $records->testing_chart_completion_date = $request->testing_chart_completion_date;
        $records->testing_chart_completion_time = $request->testing_chart_completion_time;
        $records->comm_date = $request->comm_date;
        $records->pipe_present_meter = $request->pipe_present_meter;
        $records->pipe_required_meter = $request->pipe_required_meter;
        $records->pipe_unwelded_pipe_at_site = $request->pipe_unwelded_pipe_at_site;
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
        $records->welding_material_booking_1_8_6010_kgs = $request->welding_material_booking_1_8_6010_kgs;
        $records->welding_material_booking_5_32_7010_kgs = $request->welding_material_booking_5_32_7010_kgs;
        $records->welding_material_booking_3_16_7010_kgs = $request->welding_material_booking_3_16_7010_kgs;
        $records->welding_material_booking_cutting_disc_nos = $request->welding_material_booking_cutting_disc_nos;
        $records->welding_material_booking_grinding_disc_nos = $request->welding_material_booking_grinding_disc_nos;
        $records->welding_material_booking_power_brush_nos = $request->welding_material_booking_power_brush_nos;
        $records->budget = $request->budget;
        $records->actual = $request->actual;
        $records->balance = $request->balance;
        $records->completion_report = $request->completion_report;
        $records->completion_remarks = $request->completion_remarks;
        $records->camp = $request->camp;
        $records->user_id = $admin_id;
        $records->admin_id = $id;
        $records->otp = Auth::user()->otp;
        $records->save();
        return redirect('allrecord');
    }

    public function allrecord()
    {
        $date = Carbon::today()->toDateString();

        if (Auth::user()->role == 'superadmin') {
            $records = Record::all();
            return view('suigas.totalrecord', compact('records'));
        }
        if (Auth::user()->role == 'hr') {
            $records = Record::where('otp', Auth::user()->otp)->get();
            return view('suigas.totalrecord', compact('records'));
        }
        if (Auth::user()->role == 'admin') {
            $records = Record::where('otp', Auth::user()->otp)->get();
            return view('suigas.totalrecord', compact('records'));
        }
        if (Auth::user()->role == 'user') {
            $records = Record::all();
            return view('suigas.totalrecord', compact('records'));
        }
    }
    public function allhrrecord()
    {
            $records = Record::where('user_id', Auth::user()->admin_id)->get();
            return view('suigas.totalrecord', compact('records'));

    }

    public function editrecord($id)
    {
        $records = Record::where('id', $id)->first();
        // dd($records);
        return view('suigas.editrecord', compact('records'));
    }

    public function updaterecord(Request $request)
    {
        $records = Record::find($request->id);
        $records->old_na_pp_op_cj = $request->old_na_pp_op_cj;
        $records->new_na_pp_op_cj = $request->new_na_pp_op_cj;
        $records->distt_region = $request->distt_region;
        $records->job_number = $request->job_number;
        $records->dia = $request->dia;
        $records->m_s_p_e = $request->m_s_p_e;
        $records->line_length_meter = $request->line_length_meter;
        $records->line_description = $request->line_description;
        $records->drawing = $request->drawing;
        $records->stringing_today_feet = $request->stringing_today_feet;
        $records->stringing_todate_feet = $request->stringing_todate_feet;
        $records->stringing_todate_kms = $request->stringing_todate_kms;
        $records->stringing_age = $request->stringing_age;
        $records->welding_fusion_today_feet = $request->welding_fusion_today_feet;
        $records->welding_fusion_todate_feet = $request->welding_fusion_todate_feet;
        $records->welding_fusion_todate_meter = $request->welding_fusion_todate_meter;
        $records->welding_fusion_age = $request->welding_fusion_age;
        $records->welding_fusion_date = $request->welding_fusion_date;
        $records->welding_fusion_this_f_y = $request->welding_fusion_this_f_y;
        $records->tie_ins_crossing_today_feet = $request->tie_ins_crossing_today_feet;
        $records->tie_ins_crossing_todate_feet = $request->tie_ins_crossing_todate_feet;
        $records->tie_ins_crossing_todate_kms = $request->tie_ins_crossing_todate_kms;
        $records->tie_ins_crossing_age = $request->tie_ins_crossing_age;
        $records->sleeving_today_feet = $request->sleeving_today_feet;
        $records->trenching_today_feet = $request->trenching_today_feet;
        $records->trenching_todate_feet = $request->trenching_todate_feet;
        $records->trenching_todate_kms = $request->trenching_todate_kms;
        $records->trenching_age = $request->trenching_age;
        $records->lowering_today_feet = $request->lowering_today_feet;
        $records->lowering_todate_feet = $request->lowering_todate_feet;
        $records->lowering_todate_meter = $request->lowering_todate_meter;
        $records->lowering_age = $request->lowering_age;
        $records->backfilling_today_feet = $request->backfilling_today_feet;
        $records->backfilling_todate_feet = $request->backfilling_todate_feet;
        $records->backfilling_todate_kms = $request->backfilling_todate_kms;
        $records->backfilling_age = $request->backfilling_age;
        $records->backfilling_date = $request->backfilling_date;
        $records->backfilling_f_y = $request->backfilling_f_y;
        $records->status_1 = $request->status_1;
        $records->two_noc_dept = $request->two_noc_dept;
        $records->partial_commissioning_meter_date = $request->partial_commissioning_meter_date;
        $records->commissioning_meter_date = $request->commissioning_meter_date;
        $records->partial_commissioning_meter_this_fy = $request->partial_commissioning_meter_this_fy;
        $records->partial_commissioning_meter_total = $request->partial_commissioning_meter_total;
        $records->commissioning_date = $request->commissioning_date;
        $records->remarks = $request->remarks;
        $records->look_ahead_plan = $request->look_ahead_plan;
        $records->welding_start_date = $request->welding_start_date;
        $records->welding_end_date = $request->welding_end_date;
        $records->lowering_start_date = $request->lowering_start_date;
        $records->lowering_end_date = $request->lowering_end_date;
        $records->testing_chart_completion_date = $request->testing_chart_completion_date;
        $records->testing_chart_completion_time = $request->testing_chart_completion_time;
        $records->partial_commissioning_date = $request->partial_commissioning_date;
        $records->comm_date = $request->comm_date;
        $records->pipe_present_meter = $request->pipe_present_meter;
        $records->pipe_required_meter = $request->pipe_required_meter;
        $records->pipe_unwelded_pipe_at_site = $request->pipe_unwelded_pipe_at_site;
        $records->contractor_and_payment_name = $request->contractor_and_payment_name;
        $records->contractor_ppc_amount = $request->contractor_ppc_amount;
        $records->ppc_amount_date = $request->ppc_amount_date;
        $records->contractor_ppc_amount_paid = $request->contractor_ppc_amount_paid;
        $records->ppc_amount_paid_date = $request->ppc_amount_paid_date;
        $records->contractor_fpc_amount = $request->contractor_fpc_amount;
        $records->fpc_amount_date = $request->fpc_amount_date;
        $records->contractor_fpc_amount_paid = $request->contractor_fpc_amount_paid;
        $records->fpc_amount_paid_date = $request->fpc_amount_paid_date;
        $records->job_holder = $request->job_holder;
        $records->welding_material_booking_1_8_6010_kgs = $request->welding_material_booking_1_8_6010_kgs;
        $records->welding_material_booking_5_32_7010_kgs = $request->welding_material_booking_5_32_7010_kgs;
        $records->welding_material_booking_3_16_7010_kgs = $request->welding_material_booking_3_16_7010_kgs;
        $records->welding_material_booking_cutting_disc_nos = $request->welding_material_booking_cutting_disc_nos;
        $records->welding_material_booking_grinding_disc_nos = $request->welding_material_booking_grinding_disc_nos;
        $records->welding_material_booking_power_brush_nos = $request->welding_material_booking_power_brush_nos;
        $records->budget = $request->budget;
        $records->actual = $request->actual;
        $records->balance = $request->balance;
        $records->completion_report = $request->completion_report;
        $records->completion_remarks = $request->completion_remarks;
        $records->camp = $request->camp;
        $records->save();
        return redirect('allrecord');
    }

    public function deleterecord($id)
    {
        Record::find($id)->delete();
        return redirect()->back();
    }

    public function mrecordc()
    {
        return view('suigas.monthlychange');
    }

    public function jobno($job)
    {
        $job_id = $job;
        $records = Record::where('job_number', $job)->first();
        return view('suigas.jobno', compact('records', 'job_id'));
    }
    // public function exportcsv(Request $request)
    // {
    //     $fileName = 'tasks.csv';
    //     $tasks = Record::all();

    //     $headers = array(
    //         "Content-type"        => "text/csv",
    //         "Content-Disposition" => "attachment; filename=$fileName",
    //         "Pragma"              => "no-cache",
    //         "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
    //         "Expires"             => "0"
    //     );

    //     $columns = array(
    //         '(OLD)NA/PP OP/CJ',
    //         '(New)NA/PP OP/CJ',
    //         'Distt / Region',
    //         'Job Number',
    //         'Dia',
    //         'M.S.P.E.',
    //         'Line Length meter',
    //         'Line Description',
    //         'Drawing',
    //         'Stringing Age',
    //         'Welding / Fusion Date',
    //         'Welding / Fusion This F.Y.',
    //         'Tie-Ins / Crossings Age',
    //         'Sleeving Age',
    //         'Trenching Age',
    //         'Backfilling Age',
    //         'Backfilling Date',
    //         'Backfilling This F.Y.',
    //         'Partial Commissioning (meter) Date Monthly',
    //         'Commissioning Date',
    //         'Partial Commissioning (meter) This FY',
    //         'Partial Commissioning (meter) This Total',
    //         'Commissioning Date',
    //         'Welding Start Date',
    //         'Welding End Date',
    //         'Lowering Start Date',
    //         'Lowering End Date',
    //         'Testing Chart Completion Date',
    //         'Testing Chart Completion Time',
    //         'Partial Commissioning (Date)',
    //         'Comm. Date',
    //         'Contractor and Payment Name',
    //         'Contractor and Payment PPC Amount',
    //         'Contractor and Payment PPC Amount Date',
    //         'Contractor and Payment PPC Amount Paid',
    //         'Contractor and Payment PPC Amount Paid Date',
    //         'Contractor and Payment FPC Amount',
    //         'Contractor and Payment FPC Amount Date',
    //         'Contractor and Payment FPC Amount Paid',
    //         'Contractor and Payment FPC Amount Paid Date',
    //         'MNA',
    //         'JOB HOLDER',
    //         'BUDGET',
    //         'COMPLETION REPORT',
    //         'Camp',

    //     );

    //     $callback = function () use ($tasks, $columns) {
    //         $file = fopen('php://output', 'w');
    //         fputcsv($file, $columns);

    //         foreach ($tasks as $task) {
    //             $row['old_na_pp_op_cj']  = $task->old_na_pp_op_cj;
    //             $row['new_na_pp_op_cj']    = $task->new_na_pp_op_cj;
    //             $row['distt_region']    = $task->distt_region;
    //             $row['job_number']    = $task->job_number;
    //             $row['dia']    = $task->dia;
    //             $row['m_s_p_e']    = $task->m_s_p_e;
    //             $row['line_length_meter']    = $task->line_length_meter;
    //             $row['line_description']    = $task->line_description;
    //             $row['drawing']    = $task->drawing;
    //             $row['stringing_age']    = $task->stringing_age;
    //             $row['welding_fusion_date']    = $task->welding_fusion_date;
    //             $row['welding_fusion_this_f_y']    = $task->welding_fusion_this_f_y;
    //             $row['tie_ins_crossing_age']    = $task->tie_ins_crossing_age;
    //             $row['sleeving_age']    = $task->sleeving_age;
    //             $row['trenching_age']    = $task->trenching_age;
    //             $row['backfilling_age']    = $task->backfilling_age;
    //             $row['backfilling_date']    = $task->backfilling_date;
    //             $row['backfilling_f_y']    = $task->backfilling_f_y;
    //             $row['partial_commissioning_meter_date']    = $task->partial_commissioning_meter_date;
    //             $row['commissioning_meter_date']    = $task->commissioning_meter_date;
    //             $row['partial_commissioning_meter_this_fy']    = $task->partial_commissioning_meter_this_fy;
    //             $row['partial_commissioning_meter_total']    = $task->partial_commissioning_meter_total;
    //             $row['commissioning_date']    = $task->commissioning_date;
    //             $row['welding_start_date']    = $task->welding_start_date;
    //             $row['welding_end_date']    = $task->welding_end_date;
    //             $row['lowering_start_date']    = $task->lowering_start_date;
    //             $row['lowering_end_date']    = $task->lowering_end_date;
    //             $row['testing_chart_completion_date']    = $task->testing_chart_completion_date;
    //             $row['testing_chart_completion_time']    = $task->testing_chart_completion_time;
    //             $row['partial_commissioning_date']    = $task->partial_commissioning_date;
    //             $row['comm_date']    = $task->comm_date;
    //             $row['contractor_and_payment_name']    = $task->contractor_and_payment_name;
    //             $row['contractor_ppc_amount']    = $task->contractor_ppc_amount;
    //             $row['ppc_amount_date']    = $task->ppc_amount_date;
    //             $row['contractor_ppc_amount_paid']    = $task->contractor_ppc_amount_paid;
    //             $row['ppc_amount_paid_date']    = $task->ppc_amount_paid_date;
    //             $row['contractor_fpc_amount']    = $task->contractor_fpc_amount;
    //             $row['fpc_amount_date']    = $task->fpc_amount_date;
    //             $row['contractor_fpc_amount_paid']    = $task->contractor_fpc_amount_paid;
    //             $row['fpc_amount_paid_date']    = $task->fpc_amount_paid_date;
    //             $row['mna']    = $task->mna;
    //             $row['job_holder']    = $task->job_holder;
    //             $row['budget']    = $task->budget;
    //             $row['completion_report']    = $task->completion_report;
    //             $row['camp']    = $task->camp;

    //             fputcsv($file, array(
    //                 $row['old_na_pp_op_cj'],
    //                 $row['new_na_pp_op_cj'],
    //                 $row['distt_region'],
    //                 $row['job_number'],
    //                 $row['dia'],
    //                 $row['m_s_p_e'],
    //                 $row['line_length_meter'],
    //                 $row['line_description'],
    //                 $row['drawing'],
    //                 $row['stringing_age'],
    //                 $row['welding_fusion_date'],
    //                 $row['welding_fusion_this_f_y'],
    //                 $row['tie_ins_crossing_age'],
    //                 $row['sleeving_age'],
    //                 $row['trenching_age'],
    //                 $row['backfilling_age'],
    //                 $row['backfilling_date'],
    //                 $row['backfilling_f_y'],
    //                 $row['partial_commissioning_meter_date'],
    //                 $row['commissioning_meter_date'],
    //                 $row['partial_commissioning_meter_this_fy'],
    //                 $row['partial_commissioning_meter_total'],
    //                 $row['commissioning_date'],
    //                 $row['welding_start_date'],
    //                 $row['welding_end_date'],
    //                 $row['lowering_start_date'],
    //                 $row['lowering_end_date'],
    //                 $row['testing_chart_completion_date'],
    //                 $row['testing_chart_completion_time'],
    //                 $row['partial_commissioning_date'],
    //                 $row['comm_date'],
    //                 $row['contractor_and_payment_name'],
    //                 $row['contractor_ppc_amount'],
    //                 $row['ppc_amount_date'],
    //                 $row['contractor_ppc_amount_paid'],
    //                 $row['ppc_amount_paid_date'],
    //                 $row['contractor_fpc_amount'],
    //                 $row['fpc_amount_date'],
    //                 $row['contractor_fpc_amount_paid'],
    //                 $row['fpc_amount_paid_date'],
    //                 $row['mna'],
    //                 $row['job_holder'],
    //                 $row['budget'],
    //                 $row['completion_report'],
    //                 $row['camp']
    //             ));
    //         }

    //         fclose($file);
    //     };

    //     return response()->stream($callback, 200, $headers);
    // }

    public function exportcsv(Request $request)
    {
        $fileName = 'tasks.csv';
        $tasks = Record::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array(
            '(OLD)NA/PP OP/CJ',
            '(New)NA/PP OP/CJ',
            'Distt / Region',
            'Job Number',
            'Dia',
            'M.S.P.E.',
            'Line Length meter',
            'Line Description',
            'Drawing',
            'Stringing Age %',
            'Welding / Fusion Today (feet)',
            'Welding / Fusion Todate (feet)',
            'Welding / Fusion Todate (meter)',
            'Welding / Fusion %age',
            'Welding / Fusion Date monthly',
            'Welding / Fusion This F.Y.',
            'Tie-Ins / Crossings Today (feet)',
            'Tie-Ins / Crossings Todate (feet)',
            'Tie-Ins / Crossings Todate (Kms)',
            'Tie-Ins / Crossings Today Age %',
            'Sleeving Today (feet)',
            'Sleeving Todate (feet)',
            'Sleeving Todate (Kms)',
            'Sleeving Today Age %',
            'Trenching Today (feet)',
            'Trenching Todate (feet)',
            'Trenching Todate (Kms)',
            'Trenching Today Age %',
            'Lowering Today (feet)',
            'Lowering Todate (feet)',
            'Lowering Todate (meter)',
            'Lowering %age',
            'Backfilling Today (feet)',
            'Backfilling Todate (feet)',
            'Backfilling Todate (Kms)',
            'Backfilling Today Age %',
            'Backfilling Date monthly',
            'Backfilling This F.Y.',
            'Status 1',
            '2 NOC Dept.',
            'Partial Commissioning (meter) Date Monthly',
            'Commissioning (meter) Date Monthly',
            'Partial Commissioning (meter) This FY',
            'Partial Commissioning (meter) Total',
            'Commissioning Date',
            'Remarks',
            'Look Ahead Plan',
            'Welding Start Date',
            'Welding End Date',
            'Lowering Start Date',
            'Lowering End Date',
            'Testing Chart Completion Date',
            'Testing Chart Completion Time',
            'Partial Commissioning (Date)',
            'Comm. Date',
            'Pipe Present Meter',
            'Pipe Required Meter',
            'Pipe Unwelded Pipe at Site',
            'Contractor and Payment Name',
            'Contractor and Payment PPC Amount',
            'Contractor and Payment PPC Amount Date',
            'Contractor and Payment PPC Amount Paid',
            'Contractor and Payment PPC Amount Paid Date',
            'Contractor and Payment FPC Amount',
            'Contractor and Payment FPC Amount Date',
            'Contractor and Payment FPC Amount Paid',
            'Contractor and Payment FPC Amount Paid Date',
            'MNA',
            'JOB HOLDER',
            'WELDING MATERIAL BOOKING 1/8 6010 (Kgs)',
            'WELDING MATERIAL BOOKING 5/32 7010 (Kgs)',
            'WELDING MATERIAL BOOKING 3/16 7010 (Kgs)',
            'WELDING MATERIAL BOOKING CUTTING DISC (Nos)',
            'WELDING MATERIAL BOOKING GRINDING DISC (Nos)',
            'WELDING MATERIAL BOOKING POWER BRUSH (Nos)',
            'BUDGET',
            'BUDGET ACTUAL',
            'BUDGET BALANCE',
            'COMPLETION REPORT',
            'Completion Remarks',
            'Camp',

        );

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['old_na_pp_op_cj']  = $task->old_na_pp_op_cj;
                $row['new_na_pp_op_cj']    = $task->new_na_pp_op_cj;
                $row['distt_region']    = $task->distt_region;
                $row['job_number']    = $task->job_number;
                $row['dia']    = $task->dia;
                $row['m_s_p_e']    = $task->m_s_p_e;
                $row['line_length_meter']    = $task->line_length_meter;
                $row['line_description']    = $task->line_description;
                $row['drawing']    = $task->drawing;
                $row['stringing_age']    = $task->stringing_age;
                $row['welding_fusion_today_feet']    = $task->welding_fusion_today_feet;
                $row['welding_fusion_todate_feet']    = $task->welding_fusion_todate_feet;
                $row['welding_fusion_todate_meter']    = $task->welding_fusion_todate_meter;
                $row['welding_fusion_age']    = $task->welding_fusion_age;
                $row['welding_fusion_date']    = $task->welding_fusion_date;
                $row['welding_fusion_this_f_y']    = $task->welding_fusion_this_f_y;
                $row['tie_ins_crossing_today_feet']    = $task->tie_ins_crossing_today_feet;
                $row['tie_ins_crossing_todate_feet']    = $task->tie_ins_crossing_todate_feet;
                $row['tie_ins_crossing_todate_kms']    = $task->tie_ins_crossing_todate_kms;
                $row['tie_ins_crossing_age']    = $task->tie_ins_crossing_age;
                $row['sleeving_today_feet']    = $task->sleeving_today_feet;
                $row['sleeving_todate_feet']    = $task->sleeving_todate_feet;
                $row['sleeving_todate_kms']    = $task->sleeving_todate_kms;
                $row['sleeving_age']    = $task->sleeving_age;
                $row['trenching_today_feet']    = $task->trenching_today_feet;
                $row['trenching_todate_feet']    = $task->trenching_todate_feet;
                $row['trenching_todate_kms']    = $task->trenching_todate_kms;
                $row['trenching_age']    = $task->trenching_age;
                $row['lowering_today_feet']    = $task->lowering_today_feet;
                $row['lowering_todate_feet']    = $task->lowering_todate_feet;
                $row['lowering_todate_meter']    = $task->lowering_todate_meter;
                $row['lowering_age']    = $task->lowering_age;
                $row['backfilling_today_feet']    = $task->backfilling_today_feet;
                $row['backfilling_todate_feet']    = $task->backfilling_todate_feet;
                $row['backfilling_todate_kms']    = $task->backfilling_todate_kms;
                $row['backfilling_age']    = $task->backfilling_age;
                $row['backfilling_date']    = $task->backfilling_date;
                $row['backfilling_f_y']    = $task->backfilling_f_y;
                $row['status_1']    = $task->status_1;
                $row['two_noc_dept']    = $task->two_noc_dept;
                $row['partial_commissioning_meter_date']    = $task->partial_commissioning_meter_date;
                $row['commissioning_meter_date']    = $task->commissioning_meter_date;
                $row['partial_commissioning_meter_this_fy']    = $task->partial_commissioning_meter_this_fy;
                $row['partial_commissioning_meter_total']    = $task->partial_commissioning_meter_total;
                $row['commissioning_date']    = $task->commissioning_date;
                $row['remarks']    = $task->remarks;
                $row['look_ahead_plan']    = $task->look_ahead_plan;
                $row['welding_start_date']    = $task->welding_start_date;
                $row['welding_end_date']    = $task->welding_end_date;
                $row['lowering_start_date']    = $task->lowering_start_date;
                $row['lowering_end_date']    = $task->lowering_end_date;
                $row['testing_chart_completion_date']    = $task->testing_chart_completion_date;
                $row['testing_chart_completion_time']    = $task->testing_chart_completion_time;
                $row['partial_commissioning_date']    = $task->partial_commissioning_date;
                $row['comm_date']    = $task->comm_date;
                $row['pipe_present_meter']    = $task->pipe_present_meter;
                $row['pipe_required_meter']    = $task->pipe_required_meter;
                $row['pipe_unwelded_pipe_at_site']    = $task->pipe_unwelded_pipe_at_site;
                $row['contractor_and_payment_name']    = $task->contractor_and_payment_name;
                $row['contractor_ppc_amount']    = $task->contractor_ppc_amount;
                $row['ppc_amount_date']    = $task->ppc_amount_date;
                $row['contractor_ppc_amount_paid']    = $task->contractor_ppc_amount_paid;
                $row['ppc_amount_paid_date']    = $task->ppc_amount_paid_date;
                $row['contractor_fpc_amount']    = $task->contractor_fpc_amount;
                $row['fpc_amount_date']    = $task->fpc_amount_date;
                $row['contractor_fpc_amount_paid']    = $task->contractor_fpc_amount_paid;
                $row['fpc_amount_paid_date']    = $task->fpc_amount_paid_date;
                $row['mna']    = $task->mna;
                $row['job_holder']    = $task->job_holder;
                $row['welding_material_booking_1_8_6010_kgs']    = $task->welding_material_booking_1_8_6010_kgs;
                $row['welding_material_booking_5_32_7010_kgs']    = $task->welding_material_booking_5_32_7010_kgs;
                $row['welding_material_booking_3_16_7010_kgs']    = $task->welding_material_booking_3_16_7010_kgs;
                $row['welding_material_booking_cutting_disc_nos']    = $task->welding_material_booking_cutting_disc_nos;
                $row['welding_material_booking_grinding_disc_nos']    = $task->welding_material_booking_grinding_disc_nos;
                $row['welding_material_booking_power_brush_nos']    = $task->welding_material_booking_power_brush_nos;
                $row['budget']    = $task->budget;
                $row['actual']    = $task->actual;
                $row['balance']    = $task->balance;
                $row['completion_report']    = $task->completion_report;
                $row['completion_remarks']    = $task->completion_report;
                $row['camp']    = $task->camp;

                fputcsv($file, array(
                    $row['old_na_pp_op_cj'],
                    $row['new_na_pp_op_cj'],
                    $row['distt_region'],
                    $row['job_number'],
                    $row['dia'],
                    $row['m_s_p_e'],
                    $row['line_length_meter'],
                    $row['line_description'],
                    $row['drawing'],
                    $row['stringing_age'],
                    $row['welding_fusion_today_feet'],
                    $row['welding_fusion_todate_feet'],
                    $row['welding_fusion_todate_meter'],
                    $row['welding_fusion_age'],
                    $row['welding_fusion_date'],
                    $row['welding_fusion_this_f_y'],
                    $row['tie_ins_crossing_today_feet'],
                    $row['tie_ins_crossing_todate_feet'],
                    $row['tie_ins_crossing_todate_kms'],
                    $row['tie_ins_crossing_age'],
                    $row['sleeving_today_feet'],
                    $row['sleeving_todate_feet'],
                    $row['sleeving_todate_kms'],
                    $row['sleeving_age'],
                    $row['trenching_today_feet'],
                    $row['trenching_todate_feet'],
                    $row['trenching_todate_kms'],
                    $row['trenching_age'],
                    $row['lowering_today_feet'],
                    $row['lowering_todate_feet'],
                    $row['lowering_todate_meter'],
                    $row['lowering_age'],
                    $row['backfilling_today_feet'],
                    $row['backfilling_todate_feet'],
                    $row['backfilling_todate_kms'],
                    $row['backfilling_age'],
                    $row['backfilling_date'],
                    $row['backfilling_f_y'],
                    $row['status_1'],
                    $row['two_noc_dept'],
                    $row['partial_commissioning_meter_date'],
                    $row['commissioning_meter_date'],
                    $row['partial_commissioning_meter_this_fy'],
                    $row['partial_commissioning_meter_total'],
                    $row['commissioning_date'],
                    $row['remarks'],
                    $row['look_ahead_plan'],
                    $row['welding_start_date'],
                    $row['welding_end_date'],
                    $row['lowering_start_date'],
                    $row['lowering_end_date'],
                    $row['testing_chart_completion_date'],
                    $row['testing_chart_completion_time'],
                    $row['partial_commissioning_date'],
                    $row['comm_date'],
                    $row['pipe_present_meter'],
                    $row['pipe_required_meter'],
                    $row['pipe_unwelded_pipe_at_site'],
                    $row['contractor_and_payment_name'],
                    $row['contractor_ppc_amount'],
                    $row['ppc_amount_date'],
                    $row['contractor_ppc_amount_paid'],
                    $row['ppc_amount_paid_date'],
                    $row['contractor_fpc_amount'],
                    $row['fpc_amount_date'],
                    $row['contractor_fpc_amount_paid'],
                    $row['fpc_amount_paid_date'],
                    $row['mna'],
                    $row['job_holder'],
                    $row['welding_material_booking_1_8_6010_kgs'],
                    $row['welding_material_booking_5_32_7010_kgs'],
                    $row['welding_material_booking_3_16_7010_kgs'],
                    $row['welding_material_booking_cutting_disc_nos'],
                    $row['welding_material_booking_grinding_disc_nos'],
                    $row['welding_material_booking_power_brush_nos'],
                    $row['budget'],
                    $row['actual'],
                    $row['balance'],
                    $row['completion_report'],
                    $row['completion_remarks'],
                    $row['camp'],
                ));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function exportcsvadmin(Request $request)
    {
        $fileName = 'tasks.csv';

        if(Auth::user()->role == 'admin')
        {
            $tasks =  Record::where('otp', Auth::user()->otp)->get();
        }
        if(Auth::user()->role == 'hr')
        {
            $tasks =  Record::where('otp', Auth::user()->otp)->get();
        }

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array(
            '(OLD)NA/PP OP/CJ',
            '(New)NA/PP OP/CJ',
            'Distt / Region',
            'Job Number',
            'Dia',
            'M.S.P.E.',
            'Line Length meter',
            'Line Description',
            'Drawing',
            'Stringing Age %',
            'Welding / Fusion Today (feet)',
            'Welding / Fusion Todate (feet)',
            'Welding / Fusion Todate (meter)',
            'Welding / Fusion %age',
            'Welding / Fusion Date monthly',
            'Welding / Fusion This F.Y.',
            'Tie-Ins / Crossings Today (feet)',
            'Tie-Ins / Crossings Todate (feet)',
            'Tie-Ins / Crossings Todate (Kms)',
            'Tie-Ins / Crossings Today Age %',
            'Sleeving Today (feet)',
            'Sleeving Todate (feet)',
            'Sleeving Todate (Kms)',
            'Sleeving Today Age %',
            'Trenching Today (feet)',
            'Trenching Todate (feet)',
            'Trenching Todate (Kms)',
            'Trenching Today Age %',
            'Lowering Today (feet)',
            'Lowering Todate (feet)',
            'Lowering Todate (meter)',
            'Lowering %age',
            'Backfilling Today (feet)',
            'Backfilling Todate (feet)',
            'Backfilling Todate (Kms)',
            'Backfilling Today Age %',
            'Backfilling Date monthly',
            'Backfilling This F.Y.',
            'Status 1',
            '2 NOC Dept.',
            'Partial Commissioning (meter) Date Monthly',
            'Commissioning (meter) Date Monthly',
            'Partial Commissioning (meter) This FY',
            'Partial Commissioning (meter) Total',
            'Commissioning Date',
            'Remarks',
            'Look Ahead Plan',
            'Welding Start Date',
            'Welding End Date',
            'Lowering Start Date',
            'Lowering End Date',
            'Testing Chart Completion Date',
            'Testing Chart Completion Time',
            'Partial Commissioning (Date)',
            'Comm. Date',
            'Pipe Present Meter',
            'Pipe Required Meter',
            'Pipe Unwelded Pipe at Site',
            'Contractor and Payment Name',
            'Contractor and Payment PPC Amount',
            'Contractor and Payment PPC Amount Date',
            'Contractor and Payment PPC Amount Paid',
            'Contractor and Payment PPC Amount Paid Date',
            'Contractor and Payment FPC Amount',
            'Contractor and Payment FPC Amount Date',
            'Contractor and Payment FPC Amount Paid',
            'Contractor and Payment FPC Amount Paid Date',
            'MNA',
            'JOB HOLDER',
            'WELDING MATERIAL BOOKING 1/8 6010 (Kgs)',
            'WELDING MATERIAL BOOKING 5/32 7010 (Kgs)',
            'WELDING MATERIAL BOOKING 3/16 7010 (Kgs)',
            'WELDING MATERIAL BOOKING CUTTING DISC (Nos)',
            'WELDING MATERIAL BOOKING GRINDING DISC (Nos)',
            'WELDING MATERIAL BOOKING POWER BRUSH (Nos)',
            'BUDGET',
            'BUDGET ACTUAL',
            'BUDGET BALANCE',
            'COMPLETION REPORT',
            'Completion Remarks',
            'Camp',

        );

        $callback = function () use ($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['old_na_pp_op_cj']  = $task->old_na_pp_op_cj;
                $row['new_na_pp_op_cj']    = $task->new_na_pp_op_cj;
                $row['distt_region']    = $task->distt_region;
                $row['job_number']    = $task->job_number;
                $row['dia']    = $task->dia;
                $row['m_s_p_e']    = $task->m_s_p_e;
                $row['line_length_meter']    = $task->line_length_meter;
                $row['line_description']    = $task->line_description;
                $row['drawing']    = $task->drawing;
                $row['stringing_age']    = $task->stringing_age;
                $row['welding_fusion_today_feet']    = $task->welding_fusion_today_feet;
                $row['welding_fusion_todate_feet']    = $task->welding_fusion_todate_feet;
                $row['welding_fusion_todate_meter']    = $task->welding_fusion_todate_meter;
                $row['welding_fusion_age']    = $task->welding_fusion_age;
                $row['welding_fusion_date']    = $task->welding_fusion_date;
                $row['welding_fusion_this_f_y']    = $task->welding_fusion_this_f_y;
                $row['tie_ins_crossing_today_feet']    = $task->tie_ins_crossing_today_feet;
                $row['tie_ins_crossing_todate_feet']    = $task->tie_ins_crossing_todate_feet;
                $row['tie_ins_crossing_todate_kms']    = $task->tie_ins_crossing_todate_kms;
                $row['tie_ins_crossing_age']    = $task->tie_ins_crossing_age;
                $row['sleeving_today_feet']    = $task->sleeving_today_feet;
                $row['sleeving_todate_feet']    = $task->sleeving_todate_feet;
                $row['sleeving_todate_kms']    = $task->sleeving_todate_kms;
                $row['sleeving_age']    = $task->sleeving_age;
                $row['trenching_today_feet']    = $task->trenching_today_feet;
                $row['trenching_todate_feet']    = $task->trenching_todate_feet;
                $row['trenching_todate_kms']    = $task->trenching_todate_kms;
                $row['trenching_age']    = $task->trenching_age;
                $row['lowering_today_feet']    = $task->lowering_today_feet;
                $row['lowering_todate_feet']    = $task->lowering_todate_feet;
                $row['lowering_todate_meter']    = $task->lowering_todate_meter;
                $row['lowering_age']    = $task->lowering_age;
                $row['backfilling_today_feet']    = $task->backfilling_today_feet;
                $row['backfilling_todate_feet']    = $task->backfilling_todate_feet;
                $row['backfilling_todate_kms']    = $task->backfilling_todate_kms;
                $row['backfilling_age']    = $task->backfilling_age;
                $row['backfilling_date']    = $task->backfilling_date;
                $row['backfilling_f_y']    = $task->backfilling_f_y;
                $row['status_1']    = $task->status_1;
                $row['two_noc_dept']    = $task->two_noc_dept;
                $row['partial_commissioning_meter_date']    = $task->partial_commissioning_meter_date;
                $row['commissioning_meter_date']    = $task->commissioning_meter_date;
                $row['partial_commissioning_meter_this_fy']    = $task->partial_commissioning_meter_this_fy;
                $row['partial_commissioning_meter_total']    = $task->partial_commissioning_meter_total;
                $row['commissioning_date']    = $task->commissioning_date;
                $row['remarks']    = $task->remarks;
                $row['look_ahead_plan']    = $task->look_ahead_plan;
                $row['welding_start_date']    = $task->welding_start_date;
                $row['welding_end_date']    = $task->welding_end_date;
                $row['lowering_start_date']    = $task->lowering_start_date;
                $row['lowering_end_date']    = $task->lowering_end_date;
                $row['testing_chart_completion_date']    = $task->testing_chart_completion_date;
                $row['testing_chart_completion_time']    = $task->testing_chart_completion_time;
                $row['partial_commissioning_date']    = $task->partial_commissioning_date;
                $row['comm_date']    = $task->comm_date;
                $row['pipe_present_meter']    = $task->pipe_present_meter;
                $row['pipe_required_meter']    = $task->pipe_required_meter;
                $row['pipe_unwelded_pipe_at_site']    = $task->pipe_unwelded_pipe_at_site;
                $row['contractor_and_payment_name']    = $task->contractor_and_payment_name;
                $row['contractor_ppc_amount']    = $task->contractor_ppc_amount;
                $row['ppc_amount_date']    = $task->ppc_amount_date;
                $row['contractor_ppc_amount_paid']    = $task->contractor_ppc_amount_paid;
                $row['ppc_amount_paid_date']    = $task->ppc_amount_paid_date;
                $row['contractor_fpc_amount']    = $task->contractor_fpc_amount;
                $row['fpc_amount_date']    = $task->fpc_amount_date;
                $row['contractor_fpc_amount_paid']    = $task->contractor_fpc_amount_paid;
                $row['fpc_amount_paid_date']    = $task->fpc_amount_paid_date;
                $row['mna']    = $task->mna;
                $row['job_holder']    = $task->job_holder;
                $row['welding_material_booking_1_8_6010_kgs']    = $task->welding_material_booking_1_8_6010_kgs;
                $row['welding_material_booking_5_32_7010_kgs']    = $task->welding_material_booking_5_32_7010_kgs;
                $row['welding_material_booking_3_16_7010_kgs']    = $task->welding_material_booking_3_16_7010_kgs;
                $row['welding_material_booking_cutting_disc_nos']    = $task->welding_material_booking_cutting_disc_nos;
                $row['welding_material_booking_grinding_disc_nos']    = $task->welding_material_booking_grinding_disc_nos;
                $row['welding_material_booking_power_brush_nos']    = $task->welding_material_booking_power_brush_nos;
                $row['budget']    = $task->budget;
                $row['actual']    = $task->actual;
                $row['balance']    = $task->balance;
                $row['completion_report']    = $task->completion_report;
                $row['completion_remarks']    = $task->completion_report;
                $row['camp']    = $task->camp;

                fputcsv($file, array(
                    $row['old_na_pp_op_cj'],
                    $row['new_na_pp_op_cj'],
                    $row['distt_region'],
                    $row['job_number'],
                    $row['dia'],
                    $row['m_s_p_e'],
                    $row['line_length_meter'],
                    $row['line_description'],
                    $row['drawing'],
                    $row['stringing_age'],
                    $row['welding_fusion_today_feet'],
                    $row['welding_fusion_todate_feet'],
                    $row['welding_fusion_todate_meter'],
                    $row['welding_fusion_age'],
                    $row['welding_fusion_date'],
                    $row['welding_fusion_this_f_y'],
                    $row['tie_ins_crossing_today_feet'],
                    $row['tie_ins_crossing_todate_feet'],
                    $row['tie_ins_crossing_todate_kms'],
                    $row['tie_ins_crossing_age'],
                    $row['sleeving_today_feet'],
                    $row['sleeving_todate_feet'],
                    $row['sleeving_todate_kms'],
                    $row['sleeving_age'],
                    $row['trenching_today_feet'],
                    $row['trenching_todate_feet'],
                    $row['trenching_todate_kms'],
                    $row['trenching_age'],
                    $row['lowering_today_feet'],
                    $row['lowering_todate_feet'],
                    $row['lowering_todate_meter'],
                    $row['lowering_age'],
                    $row['backfilling_today_feet'],
                    $row['backfilling_todate_feet'],
                    $row['backfilling_todate_kms'],
                    $row['backfilling_age'],
                    $row['backfilling_date'],
                    $row['backfilling_f_y'],
                    $row['status_1'],
                    $row['two_noc_dept'],
                    $row['partial_commissioning_meter_date'],
                    $row['commissioning_meter_date'],
                    $row['partial_commissioning_meter_this_fy'],
                    $row['partial_commissioning_meter_total'],
                    $row['commissioning_date'],
                    $row['remarks'],
                    $row['look_ahead_plan'],
                    $row['welding_start_date'],
                    $row['welding_end_date'],
                    $row['lowering_start_date'],
                    $row['lowering_end_date'],
                    $row['testing_chart_completion_date'],
                    $row['testing_chart_completion_time'],
                    $row['partial_commissioning_date'],
                    $row['comm_date'],
                    $row['pipe_present_meter'],
                    $row['pipe_required_meter'],
                    $row['pipe_unwelded_pipe_at_site'],
                    $row['contractor_and_payment_name'],
                    $row['contractor_ppc_amount'],
                    $row['ppc_amount_date'],
                    $row['contractor_ppc_amount_paid'],
                    $row['ppc_amount_paid_date'],
                    $row['contractor_fpc_amount'],
                    $row['fpc_amount_date'],
                    $row['contractor_fpc_amount_paid'],
                    $row['fpc_amount_paid_date'],
                    $row['mna'],
                    $row['job_holder'],
                    $row['welding_material_booking_1_8_6010_kgs'],
                    $row['welding_material_booking_5_32_7010_kgs'],
                    $row['welding_material_booking_3_16_7010_kgs'],
                    $row['welding_material_booking_cutting_disc_nos'],
                    $row['welding_material_booking_grinding_disc_nos'],
                    $row['welding_material_booking_power_brush_nos'],
                    $row['budget'],
                    $row['actual'],
                    $row['balance'],
                    $row['completion_report'],
                    $row['completion_remarks'],
                    $row['camp'],
                ));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function importcsv(Request $row)
    {
        // return new User([
        //     'old_na_pp_op_cj'     => $row[0],
        //     'new_na_pp_op_cj'    => $row[1],
        //     'distt_region' => $row[2],
        // ]);

        // $record = new Record();
        // $record->old_na_pp_op_cj = $row[0];
        // $record->new_na_pp_op_cj = $row[1];
        // $record->distt_region = $row[2];
        // $record->save();
        // return back();

        $record = (new Record())
    }
}
