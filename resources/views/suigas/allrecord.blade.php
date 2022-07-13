
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sui Nothern Gas Pipeline</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{url('xhtml/image/png')}}" sizes="16x16" href="{{url('xhtml/images/sngpl.png')}}">
    <link href="{{url('xhtml/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('xhtml/vendor/chartist/css/chartist.min.css')}}">
	<!-- Datatable -->
    <link href="{{url('xhtml/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
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
            <a href="index.html" class="brand-logo">
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
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Record</h2>
						<p class="mb-0">Sui Gas Record</p>
					</div>
					<div>
						<!-- <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Create User</a> -->
						<!-- <a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a> -->
					</div>
				</div>
				<!-- Add Order -->
				@include('suigas.createuser')
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard white-border table-responsive-xl">
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
										<th>Welding / Fusion Today (feet)</th>
										<th>Welding / Fusion Todate (feet)</th>
										<th>Welding / Fusion Todate (meter)</th>
										<th>Welding / Fusion %age</th>
										<th>Welding / Fusion Date monthly</th>
										<th>Welding / Fusion This F.Y.</th>
										<th>Lowering Today (feet)</th>
										<th>Lowering Todate (feet)</th>
										<th>Lowering Todate (meter)</th>
										<th>Lowering %age</th>
										<th>Lowering Date monthly</th>
										<th>Lowering This F.Y.</th>
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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($records as $record)
										
										<td>{{$record->old_na_pp_op_cj}}</td>
										<td>{{$record->new_na_pp_op_cj}}</td>
										<td>{{$record->distt_region}}</td>
										<a href="jobno/{{ $record->job_number}}"><td>{{$record->dia}}</td></a>
										<td>{{$record->dia}}</td>
										<td>{{$record->m_s_p_e}}</td>
										<td>{{$record->line_length_meter}}</td>
										<td>{{$record->line_description}}</td>
										<td>{{$record->drawing}}</td>
										<td>{{$record->welding_fusion_today_feet}}</td>
										<td>{{$record->welding_fusion_todate_feet}}</td>
										<td>{{$record->welding_fusion_todate_meter}}</td>
										<td>{{$record->welding_fusion_age}}</td>
										<td>{{$record->welding_fusion_date}}</td>
										<td>{{$record->welding_fusion_this_f_y}}</td>
										<td>{{$record->lowering_today_feet}}</td>
										<td>{{$record->lowering_todate_feet}}</td>
										<td>{{$record->lowering_todate_meter}}</td>
										<td>{{$record->lowering_age}}</td>
										<td>{{$record->lowering_date}}</td>
										<td>{{$record->lowering_f_y}}</td>
										<td>{{$record->status_1}}</td>
										<td>{{$record->two_noc_dept}}</td>
										<td>{{$record->partial_commissioning_meter_date}}</td>
										<td>{{$record->commissioning_meter_date}}</td>
										<td>{{$record->partial_commissioning_meter_this_fy}}</td>
										<td>{{$record->partial_commissioning_meter_total}}</td>
										<td>{{$record->commissioning_date}}</td>
										<td>{{$record->remarks}}</td>
										<td>{{$record->look_ahead_plan}}</td>
										<td>{{$record->welding_start_date}}</td>
										<td>{{$record->welding_end_date}}</td>
										<td>{{$record->lowering_start_date}}</td>
										<td>{{$record->lowering_end_date}}</td>
										<td>{{$record->testing_chart_completion_date}}</td>
										<td>{{$record->testing_chart_completion_time}}</td>
										<td>{{$record->partial_commissioning_date}}</td>
										<td>{{$record->comm_date}}</td>
										<td>{{$record->pipe_present_meter}}</td>
										<td>{{$record->pipe_required_meter}}</td>
										<td>{{$record->pipe_unwelded_pipe_at_site}}</td>
										<td>{{$record->contractor_and_payment_name}}</td>
										<td>{{$record->contractor_ppc_amount}}</td>
										<td>{{$record->ppc_amount_date}}</td>
										<td>{{$record->contractor_ppc_amount_paid}}</td>
										<td>{{$record->ppc_amount_paid_date}}</td>
										<td>{{$record->contractor_fpc_amount}}</td>
										<td>{{$record->fpc_amount_date}}</td>
										<td>{{$record->contractor_fpc_amount_paid}}</td>
										<td>{{$record->fpc_amount_paid_date}}</td>
										<td>{{$record->mna}}</td>
										<td>{{$record->job_holder}}</td>
										<td>{{$record->welding_material_booking_1_8_6010_kgs}}</td>
										<td>{{$record->welding_material_booking_5_32_7010_kgs}}</td>
										<td>{{$record->welding_material_booking_3_16_7010_kgs}}</td>
										<td>{{$record->welding_material_booking_cutting_disc_nos}}</td>
										<td>{{$record->welding_material_booking_grinding_disc_nos}}</td>
										<td>{{$record->welding_material_booking_power_brush_nos}}</td>
										<td>{{$record->budget}}</td>
										<td>{{$record->actual}}</td>
										<td>{{$record->balance}}</td>
										<td>{{$record->completion_report}}</td>
										<td>{{$record->completion_remarks}}</td>
										<td>{{$record->camp}}</td>
										<td><a href="recordedit/{{ $record->id }}" class="btn btn-primary">Edit</a> <a href="recorddelete/{{ $record->id }}" class="btn btn-danger">Delete</a></td>
												
									</tr>
									@endforeach
									
								</tbody>
							</table>
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
	<script src="{{url('xhtml/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{url('xhtml/js/custom.min.js')}}"></script>
	<script src="{{url('xhtml/js/deznav-init.js')}}"></script>

    <!-- Datatable -->
    <script src="{{url('xhtml/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script>
		(function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
	</script>
</body>
</html>