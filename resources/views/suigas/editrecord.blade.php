<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sui Nothern Gas Pipeline</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{url('xhtml/image/png')}}" sizes="16x16" href="{{url('xhtml/images/sngpl.png')}}">
    <!-- Form step -->
    <link href="{{url('xhtml/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')}}" rel="stylesheet">
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
               
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Details">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#wizard_Payment">
											<span>4</span>
										</a></li>
										
									</ul>
									<div class="tab-content">
											<form action="{{url('updateerecord')}}" method="Post">
												@csrf
												<input type="hidden" name="id" value="{{$records->id}}">
										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">(OLD)NA/PP OP/CJ</label>
														<input type="text" name="old_na_pp_op_cj" class="form-control" value ="{{$records->old_na_pp_op_cj}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">(New)NA/PP OP/CJ</label>
														<input type="text" name="new_na_pp_op_cj" class="form-control" value ="{{$records->new_na_pp_op_cj}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Distt / Region</label>
														<input type="text" name="distt_region" class="form-control" value ="{{$records->distt_region}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Job Number</label>
														<input type="text" name="job_number" class="form-control" value ="{{$records->job_number}}">
													</div>
												</div>

												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Dia</label>
														<input type="text" name="dia" class="form-control" value ="{{$records->dia}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">M.S.P.E.</label>
														<input type="text" name="m_s_p_e" class="form-control" value ="{{$records->m_s_p_e}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Line Length meter</label>
														<input type="text" name="line_length_meter" class="form-control" value ="{{$records->line_length_meter}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Drawing</label>
														<input type="text" name="drawing" class="form-control" value ="{{$records->drawing}}">
													</div>
												</div>

												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Line Description</label>
														<textarea class="form-control" name="line_description" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2">{{$records->line_description}}</textarea>
													</div>
												</div>

												<div class="col-lg-12 mb-2">
												<h1>Welding / Fusion</h1><br>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Today (feet)</label>
														<input type="text" name="welding_fusion_today_feet" class="form-control" value ="{{$records->welding_fusion_today_feet}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Todate (feet)</label>
														<input type="text" name="welding_fusion_todate_feet" class="form-control" value ="{{$records->welding_fusion_todate_feet}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Todate (meter)</label>
														<input type="text" name="welding_fusion_todate_meter" class="form-control" value ="{{$records->welding_fusion_todate_meter}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">%age</label>
														<input type="text" name="welding_fusion_age" class="form-control" value="{{$records->welding_fusion_age}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Date monthly</label>
														<input type="text" name="welding_fusion_date" class="form-control" value="{{$records->welding_fusion_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">This F.Y.</label>
														<input type="text" name="welding_fusion_this_f_y" class="form-control" value ="{{$records->welding_fusion_this_f_y}}">
													</div>
												</div>

											</div>
										</div>
										
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
												<h1>Lowering</h1><br>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Today (feet)</label>
														<input type="text" name="lowering_today_feet" class="form-control" value ="{{$records->lowering_today_feet}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Todate (feet)</label>
														<input type="text" name="lowering_todate_feet" class="form-control" value ="{{$records->lowering_todate_feet}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Todate (meter)</label>
														<input type="text" name="lowering_todate_meter" class="form-control" value ="{{$records->lowering_todate_meter}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">%Age</label>
														<input type="text" name="lowering_age" class="form-control" value ="{{$records->lowering_age}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Date monthly</label>
														<input type="text" name="lowering_date" class="form-control" value ="{{$records->lowering_date}}">
													</div>
												</div>

												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">This F.Y.</label>
														<input type="text" name="lowering_f_y" class="form-control" value ="{{$records->lowering_f_y}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Status 1</label>
														<input type="text" name="status_1" class="form-control" value ="{{$records->status_1}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">2 NOC Dept.</label>
														<input type="text" name="two_noc_dept" class="form-control" value ="{{$records->two_noc_dept}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) Date Monthly</label>
														<input type="text" name="partial_commissioning_meter_date" class="form-control" value ="{{$records->partial_commissioning_meter_date}}">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning (meter) Date Monthly</label>
														<input type="text" name="commissioning_meter_date" class="form-control" value ="{{$records->commissioning_meter_date}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) This FY</label>
														<input type="text" name="partial_commissioning_meter_this_fy" class="form-control" value ="{{$records->partial_commissioning_meter_this_fy}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) Total</label>
														<input type="text" name="partial_commissioning_meter_total" class="form-control" value ="{{$records->partial_commissioning_meter_total}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning Date</label>
														<input type="text" name="commissioning_date" class="form-control" value ="{{$records->commissioning_date}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Look Ahead Plan</label>
														<input type="text" name="look_ahead_plan" class="form-control" value ="{{$records->look_ahead_plan}}">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Remarks</label>
														<textarea class="form-control" name="remarks" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2">{{$records->remarks}}</textarea>
													</div>
												</div>
													
												<div class="col-lg-6 mb-2">
												<h2>Welding</h2><br>
												</div>
												<div class="col-lg-6 mb-2">
												<h2>Lowering</h2><br>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Start Date</label>
														<input type="text" name="welding_start_date" class="form-control" value ="{{$records->welding_start_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">End Date</label>
														<input type="text" name="welding_end_date" class="form-control" value ="{{$records->welding_end_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Start Date</label>
														<input type="text" name="lowering_start_date" class="form-control" value="{{$records->lowering_start_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">End Date</label>
														<input type="text" name="lowering_end_date" class="form-control" value ="{{$records->lowering_end_date}}">
													</div>
												</div>

											</div>
										</div>
										<div id="wizard_Details" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<h2>Testing Chart Completion</h2><br>
													</div>
												</div>
												<div class="col-lg-3 mb-2">
												<h2>Partial</h2><br>
												</div>
												<div class="col-lg-3 mb-2">
												<h2>Comm.</h2><br>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Date</label>
														<input type="text" name="testing_chart_completion_date" class="form-control" value ="{{$records->testing_chart_completion_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Time</label>
														<input type="text" name="testing_chart_completion_time" class="form-control" value ="{{$records->testing_chart_completion_time}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning (Date)</label>
														<input type="text" name="partial_commissioning_date" class="form-control" value ="{{$records->partial_commissioning_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Date</label>
														<input type="text" name="comm_date" class="form-control" value ="{{$records->comm_date}}">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>Pipe</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Present 	Meter</label>
														<input type="text" name="pipe_present_meter" class="form-control" value ="{{$records->pipe_present_meter}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Required Meter</label>
														<input type="text" name="pipe_required_meter" class="form-control" value ="{{$records->pipe_required_meter}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Unwelded Pipe at Site</label>
														<input type="text" name="pipe_unwelded_pipe_at_site" class="form-control" value ="{{$records->pipe_unwelded_pipe_at_site}}">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>Contractor and Payment</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Name</label>
														<input type="text" name="contractor_and_payment_name" class="form-control" value ="{{$records->contractor_and_payment_name}}">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount</label>
														<input type="text" name="contractor_ppc_amount" class="form-control" value ="{{$records->contractor_ppc_amount}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Date</label>
														<input type="text" name="ppc_amount_date" class="form-control" value ="{{$records->ppc_amount_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Paid</label>
														<input type="text" name="contractor_ppc_amount_paid" class="form-control" value ="{{$records->contractor_ppc_amount_paid}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Paid Date</label>
														<input type="text" name="ppc_amount_paid_date" class="form-control" value ="{{$records->ppc_amount_paid_date}}">
													</div>
												</div>

												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount</label>
														<input type="text" name="contractor_fpc_amount" class="form-control" value ="{{$records->contractor_fpc_amount}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Date</label>
														<input type="text" name="fpc_amount_date" class="form-control" value ="{{$records->fpc_amount_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Paid</label>
														<input type="text" name="contractor_fpc_amount_paid" class="form-control" value ="{{$records->contractor_fpc_amount_paid}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Paid Date</label>
														<input type="text" name="fpc_amount_paid_date" class="form-control" value ="{{$records->fpc_amount_paid_date}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">MNA</label>
														<input type="text" name="mna" class="form-control" value ="{{$records->mna}}">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">JOB HOLDER</label>
														<input type="text" name="job_holder" class="form-control" value ="{{$records->job_holder}}">
													</div>
												</div>
												
											</div>
										</div>
										<div id="wizard_Payment" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-12 mb-2">
												<h2>WELDING MATERIAL BOOKING</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">1/8 6010 (Kgs)</label>
														<input type="text" name="welding_material_booking_1_8_6010_kgs" class="form-control" value ="{{$records->welding_material_booking_1_8_6010_kgs}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">5/32 7010 (Kgs)</label>
														<input type="text" name="welding_material_booking_5_32_7010_kgs" class="form-control" value ="{{$records->welding_material_booking_5_32_7010_kgs}}">
													</div>
												</div>
												<div class="col-lg- mb-4">
													<div class="form-group">
														<label class="text-label">3/16 7010 (Kgs)</label>
														<input type="text" name="welding_material_booking_3_16_7010_kgs" class="form-control" value ="{{$records->welding_material_booking_3_16_7010_kgs}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">CUTTING DISC (Nos)</label>
														<input type="text" name="welding_material_booking_cutting_disc_nos" class="form-control" value ="{{$records->welding_material_booking_cutting_disc_nos}}">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">GRINDING DISC (Nos)</label>
														<input type="text" name="welding_material_booking_grinding_disc_nos" class="form-control" value ="{{$records->welding_material_booking_grinding_disc_nos}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">POWER BRUSH (Nos)</label>
														<input type="text" name="welding_material_booking_power_brush_nos" class="form-control" value ="{{$records->welding_material_booking_power_brush_nos}}">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>BUDGET</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">BUDGET</label>
														<input type="text" name="budget" class="form-control" value ="{{$records->budget}}"budget>
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">ACTUAL</label>
														<input type="text" name="actual" class="form-control" value ="{{$records->actual}}">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">BALANCE</label>
														<input type="text" name="balance" class="form-control" value ="{{$records->balance}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">COMPLETION REPORT</label>
														<input type="text" name="completion_report" class="form-control" value ="{{$records->completion_report}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Completion Remarks</label>
														<input type="text" name="completion_remarks" class="form-control" value ="{{$records->completion_remarks}}">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Camp</label>
														<input type="text" name="camp" class="form-control" value ="{{$records->camp}}">
													</div>
												</div>

												
												<button type="submit" class="btn btn-primary btn-block">Update</button>
											</div>
										</div>
										</form>
									</div>
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
	
    


    <script src="{{url('xhtml/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{url('xhtml/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{url('xhtml/js/plugins-init/jquery.validate-init.js')}}"></script>



   <!-- Form Steps -->
	<script src="{{url('xhtml/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
	
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>

</body>

</html>