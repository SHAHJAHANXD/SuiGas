<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sui Nothern Gas Pipeline</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{ url('xhtml/image/png') }}" sizes="16x16" href="{{ url('xhtml/images/sngpl.png') }}">
    <!-- Datatable -->
    <link href="{{ url('xhtml/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ url('xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ url('xhtml/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
                <!-- <img class="logo-abbr" src="{{ url('xhtml/images/logo.png') }}" alt=""> -->
                <img class="logo-compact" src="{{ url('xhtml/images/suigas.png') }}" alt="">
                <img class="brand-title" src="{{ url('xhtml/images/suigas.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('suigas.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('suigas.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-6">
                                    <h4 class="card-title">Record</h4>
                                </div>
                                <div class="col-6" style="    text-align: right;">
                                    @if (Auth::user()->role == 'superadmin')
                                    <h4 class="card-title"><span data-href="{{ route('export-tasks') }}" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);" style="background-color: #007A64;">Export</span><span class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" style="    margin-left: 10px;     background-color: #007A64;">Import</span>
                                    </h4>
                                    @endif
                                    @if (Auth::user()->role == 'hr' || Auth::user()->role == 'admin')
                                    <h4 class="card-title"><span data-href="{{ route('export-tasks-admin') }}" id="export" class="btn btn-success btn-sm" onclick=" exportTasks(event.target);" style="background-color: #007A64;">Export</span><span class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" style="    margin-left: 10px;     background-color: #007A64;">Import</span>
                                    </h4>
                                    @endif
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>(OLD)NA/PP OP/CJ</th>
                                                <th>(New)NA/PP OP/CJ</th>
                                                <th>Distt / Region</th>
                                                <th>Job Number</th>
                                                <th>Dia</th>
                                                <th>M.S.P.E.</th>
                                                <th>Line Length meter</th>
                                                <th>Line Description</th>
                                                <th>Drawing</th>
                                                <th>Stringing Age %</th>
                                                <th>Welding / Fusion Today (feet)</th>
                                                <th>Welding / Fusion Todate (feet)</th>
                                                <th>Welding / Fusion Todate (meter)</th>
                                                <th>Welding / Fusion %age</th>
                                                <th>Welding / Fusion Date monthly</th>
                                                <th>Welding / Fusion This F.Y.</th>
                                                <th>Tie-Ins / Crossings Today (feet)</th>
                                                <th>Tie-Ins / Crossings Todate (feet)</th>
                                                <th>Tie-Ins / Crossings Todate (Kms)</th>
                                                <th>Tie-Ins / Crossings Today Age %</th>
                                                <th>Sleeving Today (feet)</th>
                                                <th>Sleeving Todate (feet)</th>
                                                <th>Sleeving Todate (Kms)</th>
                                                <th>Sleeving Today Age %</th>
                                                <th>Trenching Today (feet)</th>
                                                <th>Trenching Todate (feet)</th>
                                                <th>Trenching Todate (Kms)</th>
                                                <th>Trenching Today Age %</th>
                                                <th>Lowering Today (feet)</th>
                                                <th>Lowering Todate (feet)</th>
                                                <th>Lowering Todate (meter)</th>
                                                <th>Lowering %age</th>
                                                <th>Backfilling Today (feet)</th>
                                                <th>Backfilling Todate (feet)</th>
                                                <th>Backfilling Todate (Kms)</th>
                                                <th>Backfilling Today Age %</th>
                                                <th>Backfilling Date monthly</th>
                                                <th>Backfilling This F.Y.</th>
                                                <th>Status 1</th>
                                                <th>2 NOC Dept.</th>
                                                <th>Partial Commissioning (meter) Date Monthly</th>
                                                <th>Commissioning (meter) Date Monthly</th>
                                                <th>Partial Commissioning (meter) This FY</th>
                                                <th>Partial Commissioning (meter) Total</th>
                                                <th>Commissioning Date</th>
                                                <th>Remarks</th>
                                                <th>Look Ahead Plan</th>
                                                <th>Welding Start Date</th>
                                                <th>Welding End Date</th>
                                                <th>Lowering Start Date</th>
                                                <th>Lowering End Date</th>
                                                <th>Testing Chart Completion Date</th>
                                                <th>Testing Chart Completion Time</th>
                                                <th>Partial Commissioning (Date)</th>
                                                <th>Comm. Date</th>
                                                <th>Pipe Present Meter</th>
                                                <th>Pipe Required Meter</th>
                                                <th>Pipe Unwelded Pipe at Site</th>
                                                <th>Contractor and Payment Name</th>
                                                <th>Contractor and Payment PPC Amount</th>
                                                <th>Contractor and Payment PPC Amount Date</th>
                                                <th>Contractor and Payment PPC Amount Paid</th>
                                                <th>Contractor and Payment PPC Amount Paid Date</th>
                                                <th>Contractor and Payment FPC Amount</th>
                                                <th>Contractor and Payment FPC Amount Date</th>
                                                <th>Contractor and Payment FPC Amount Paid</th>
                                                <th>Contractor and Payment FPC Amount Paid Date</th>
                                                <th>MNA</th>
                                                <th>JOB HOLDER</th>
                                                <th>WELDING MATERIAL BOOKING 1/8 6010 (Kgs)</th>
                                                <th>WELDING MATERIAL BOOKING 5/32 7010 (Kgs)</th>
                                                <th>WELDING MATERIAL BOOKING 3/16 7010 (Kgs)</th>
                                                <th>WELDING MATERIAL BOOKING CUTTING DISC (Nos)</th>
                                                <th>WELDING MATERIAL BOOKING GRINDING DISC (Nos)</th>
                                                <th>WELDING MATERIAL BOOKING POWER BRUSH (Nos)</th>
                                                <th>BUDGET</th>
                                                <th>BUDGET ACTUAL</th>
                                                <th>BUDGET BALANCE</th>
                                                <th>COMPLETION REPORT</th>
                                                <th>Completion Remarks</th>
                                                <th>Camp</th>
                                                @if (Auth::user()->AllowStatus == 1 && Auth::user()->role == 'hr')
                                                <th>Action</th>
                                                @endif
                                                @if (Auth::user()->role == 'admin')
                                                <th>Action</th>
                                                @endif
                                                @if (Auth::user()->role == 'superadmin')
                                                <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $record->old_na_pp_op_cj }}</td>
                                                <td>{{ $record->new_na_pp_op_cj }}</td>
                                                <td>{{ $record->distt_region }}</td>
                                                <td><a href="jobno/{{ $record->job_number }}">{{ $record->job_number }}</a>
                                                </td>
                                                <td>{{ $record->dia }}</td>
                                                <td>{{ $record->m_s_p_e }}</td>
                                                <td>{{ $record->line_length_meter }}</td>
                                                <td>{{ $record->line_description }}</td>
                                                <td>{{ $record->drawing }}</td>
                                                <td>{{ $record->drawing }}</td>
                                                <td>{{ $record->welding_fusion_today_feet }}</td>
                                                <td>{{ $record->welding_fusion_todate_feet }}</td>
                                                <td>{{ $record->welding_fusion_todate_meter }}</td>
                                                <td>{{ $record->welding_fusion_age }}</td>
                                                <td>{{ $record->welding_fusion_date }}</td>
                                                <td>{{ $record->welding_fusion_this_f_y }}</td>
                                                <td>{{ $record->tie_ins_crossing_today_feet }}</td>
                                                <td>{{ $record->tie_ins_crossing_todate_feet }}</td>
                                                <td>{{ $record->tie_ins_crossing_todate_kms }}</td>
                                                <td>{{ $record->tie_ins_crossing_age }}</td>
                                                <td>{{ $record->sleeving_today_feet }}</td>
                                                <td>{{ $record->sleeving_todate_feet }}</td>
                                                <td>{{ $record->sleeving_todate_kms }}</td>
                                                <td>{{ $record->sleeving_age }}</td>
                                                <td>{{ $record->trenching_today_feet }}</td>
                                                <td>{{ $record->trenching_todate_feet }}</td>
                                                <td>{{ $record->trenching_todate_kms }}</td>
                                                <td>{{ $record->trenching_age }}</td>
                                                <td>{{ $record->lowering_today_feet }}</td>
                                                <td>{{ $record->lowering_todate_feet }}</td>
                                                <td>{{ $record->lowering_todate_meter }}</td>
                                                <td>{{ $record->lowering_age }}</td>
                                                <td>{{ $record->backfilling_today_feet }}</td>
                                                <td>{{ $record->backfilling_todate_feet }}</td>
                                                <td>{{ $record->backfilling_todate_kms }}</td>
                                                <td>{{ $record->backfilling_age }}</td>
                                                <td>{{ $record->backfilling_date }}</td>
                                                <td>{{ $record->backfilling_f_y }}</td>
                                                <td>{{ $record->status_1 }}</td>
                                                <td>{{ $record->two_noc_dept }}</td>
                                                <td>{{ $record->partial_commissioning_meter_date }}</td>
                                                <td>{{ $record->commissioning_meter_date }}</td>
                                                <td>{{ $record->partial_commissioning_meter_this_fy }}</td>
                                                <td>{{ $record->partial_commissioning_meter_total }}</td>
                                                <td>{{ $record->commissioning_date }}</td>
                                                <td>{{ $record->remarks }}</td>
                                                <td>{{ $record->look_ahead_plan }}</td>
                                                <td>{{ $record->welding_start_date }}</td>
                                                <td>{{ $record->welding_end_date }}</td>
                                                <td>{{ $record->lowering_start_date }}</td>
                                                <td>{{ $record->lowering_end_date }}</td>
                                                <td>{{ $record->testing_chart_completion_date }}</td>
                                                <td>{{ $record->testing_chart_completion_time }}</td>
                                                <td>{{ $record->partial_commissioning_date }}</td>
                                                <td>{{ $record->comm_date }}</td>
                                                <td>{{ $record->pipe_present_meter }}</td>
                                                <td>{{ $record->pipe_required_meter }}</td>
                                                <td>{{ $record->pipe_unwelded_pipe_at_site }}</td>
                                                <td>{{ $record->contractor_and_payment_name }}</td>
                                                <td>{{ $record->contractor_ppc_amount }}</td>
                                                <td>{{ $record->ppc_amount_date }}</td>
                                                <td>{{ $record->contractor_ppc_amount_paid }}</td>
                                                <td>{{ $record->ppc_amount_paid_date }}</td>
                                                <td>{{ $record->contractor_fpc_amount }}</td>
                                                <td>{{ $record->fpc_amount_date }}</td>
                                                <td>{{ $record->contractor_fpc_amount_paid }}</td>
                                                <td>{{ $record->fpc_amount_paid_date }}</td>
                                                <td>{{ $record->mna }}</td>
                                                <td>{{ $record->job_holder }}</td>
                                                <td>{{ $record->welding_material_booking_1_8_6010_kgs }}</td>
                                                <td>{{ $record->welding_material_booking_5_32_7010_kgs }}</td>
                                                <td>{{ $record->welding_material_booking_3_16_7010_kgs }}</td>
                                                <td>{{ $record->welding_material_booking_cutting_disc_nos }}</td>
                                                <td>{{ $record->welding_material_booking_grinding_disc_nos }}
                                                </td>
                                                <td>{{ $record->welding_material_booking_power_brush_nos }}</td>
                                                <td>{{ $record->budget }}</td>
                                                <td>{{ $record->actual }}</td>
                                                <td>{{ $record->balance }}</td>
                                                <td>{{ $record->completion_report }}</td>
                                                <td>{{ $record->completion_remarks }}</td>
                                                <td>{{ $record->camp }}</td>

                                                @can('isPermission', 'isHr')
                                                @if (date('Y-m-d') == $record->created_at->format('Y-m-d') || Auth::user()->role == 'superadmin' || Auth::user()->role == 'hr')
                                                @if (Auth::user()->AllowStatus == 1 && Auth::user()->role == 'hr')
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="recordedit/{{ $record->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="recorddelete/{{ $record->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                                @endif

                                                @endif
                                                @endcan
                                                @if (Auth::user()->role == 'admin')
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="recordedit/{{ $record->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="recorddelete/{{ $record->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                                @endif
                                                @if (Auth::user()->role == 'superadmin')
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="recordedit/{{ $record->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="recorddelete/{{ $record->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('suigas.footer')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-window-close"></i></button>
                </div>
                <div class="modal-body">
                    <form action="/import-tasks" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ url('xhtml/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('xhtml/js/custom.min.js') }}"></script>
    <script src="{{ url('xhtml/js/deznav-init.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ url('xhtml/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('xhtml/js/plugins-init/datatables.init.js') }}"></script>


    <script>
        function exportTasks(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }

    </script>
</body>

</html>
