<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sui Nothern Gas Pipeline</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{url('xhtml/image/png')}}" sizes="16x16" href="{{url('xhtml/images/sngpl.png')}}">
    <!-- Datatable -->
    <link href="{{url('xhtml/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{url('xhtml/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('xhtml/css/style.css')}}" rel="stylesheet">
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
                <!-- <img class="logo-abbr" src="{{url('xhtml/images/logo.png')}}" alt=""> -->
                <img class="logo-compact" src="{{url('xhtml/images/suigas.png')}}" alt="">
                <img class="brand-title" src="{{url('xhtml/images/suigas.png')}}" alt="">
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
                                <h4 class="card-title">Record</h4>
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
                                        <th>Welding / Fusion Date monthly</th>
                                        <th>Welding / Fusion This F.Y.</th>
                                        <th>Tie-Ins / Crossings Age %</th>
                                        <th>Sleeving Age %</th>
                                        <th>Trenching Age %</th>
                                        <th>Backfilling Age %</th>
                                        <th>Backfilling Date monthly</th>
                                        <th>Backfilling This F.Y.</th>
                                        <th>Partial Commissioning (meter) Date Monthly</th>
                                        <th>Commissioning (meter) Date Monthly</th>
                                        <th>Partial Commissioning (meter) This FY</th>
                                        <th>Partial Commissioning (meter) Total</th>
                                        <th>Commissioning Date</th>
                                        <th>Welding Start Date</th>
                                        <th>Welding End Date</th>
                                        <th>Lowering Start Date</th>
                                        <th>Lowering End Date</th>
                                        <th>Testing Chart Completion Date</th>
                                        <th>Testing Chart Completion Time</th>
                                        <th>Partial Commissioning (Date)</th>
                                        <th>Comm. Date</th>
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
                                        <th>BUDGET</th>
                                        <th>COMPLETION REPORT</th>
                                        <th>Camp</th>
                                        <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($YearlyDatum as $YearlyData)
                                            <tr>
                                                <td>{{$YearlyData->old_na_pp_op_cj}}</td>
                                                <td>{{$YearlyData->new_na_pp_op_cj}}</td>
                                                <td>{{$YearlyData->distt_region}}</td>
                                                <td>{{$YearlyData->job_number}}</td>
                                                <td>{{$YearlyData->dia}}</td>
                                                <td>{{$YearlyData->m_s_p_e}}</td>
                                                <td>{{$YearlyData->line_length_meter}}</td>
                                                <td>{{$YearlyData->line_description}}</td>
                                                <td>{{$YearlyData->drawing}}</td>
                                                <td>{{$YearlyData->stringing_age}}</td>
                                                <td>{{$YearlyData->welding_fusion_date}}</td>
                                                <td>{{$YearlyData->welding_fusion_this_f_y}}</td>
                                                <td>{{$YearlyData->tie_ins_crossing_age}}</td>
                                                <td>{{$YearlyData->sleeving_age}}</td>
                                                <td>{{$YearlyData->trenching_age}}</td>
                                                <td>{{$YearlyData->backfilling_age}}</td>
                                                <td>{{$YearlyData->backfilling_date}}</td>
                                                <td>{{$YearlyData->backfilling_f_y}}</td>
                                                <td>{{$YearlyData->partial_commissioning_meter_date}}</td>
                                                <td>{{$YearlyData->commissioning_meter_date}}</td>
                                                <td>{{$YearlyData->partial_commissioning_meter_this_fy}}</td>
                                                <td>{{$YearlyData->partial_commissioning_meter_total}}</td>
                                                <td>{{$YearlyData->commissioning_date}}</td>
                                                <td>{{$YearlyData->welding_start_date}}</td>
                                                <td>{{$YearlyData->welding_end_date}}</td>
                                                <td>{{$YearlyData->lowering_start_date}}</td>
                                                <td>{{$YearlyData->lowering_end_date}}</td>
                                                <td>{{$YearlyData->testing_chart_completion_date}}</td>
                                                <td>{{$YearlyData->testing_chart_completion_time}}</td>
                                                <td>{{$YearlyData->partial_commissioning_date}}</td>
                                                <td>{{$YearlyData->comm_date}}</td>
                                                <td>{{$YearlyData->contractor_and_payment_name}}</td>
                                                <td>{{$YearlyData->contractor_ppc_amount}}</td>
                                                <td>{{$YearlyData->ppc_amount_date}}</td>
                                                <td>{{$YearlyData->contractor_ppc_amount_paid}}</td>
                                                <td>{{$YearlyData->ppc_amount_paid_date}}</td>
                                                <td>{{$YearlyData->contractor_fpc_amount}}</td>
                                                <td>{{$YearlyData->fpc_amount_date}}</td>
                                                <td>{{$YearlyData->contractor_fpc_amount_paid}}</td>
                                                <td>{{$YearlyData->fpc_amount_paid_date}}</td>
                                                <td>{{$YearlyData->mna}}</td>
                                                <td>{{$YearlyData->job_holder}}</td>
                                                <td>{{$YearlyData->budget}}</td>
                                                <td>{{$YearlyData->completion_report}}</td>
                                                <td>{{$YearlyData->camp}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="yearlydatachangeedit/{{ $YearlyData->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        <a href="yearlydatachangedelete/{{ $YearlyData->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                    </div>      
                                                </td>   
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
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('xhtml/vendor/global/global.min.js')}}"></script>
    <script src="{{url('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('xhtml/js/custom.min.js')}}"></script>
    <script src="{{url('xhtml/js/deznav-init.js')}}"></script>
    
    <!-- Datatable -->
    <script src="{{url('xhtml/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('xhtml/js/plugins-init/datatables.init.js')}}"></script>

</body>
</html>