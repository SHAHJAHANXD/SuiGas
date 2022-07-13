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
                                <h4 class="card-title">Yearly data Change</h4>
                            </div>
                            <div class="card-body">
									<div class="tab-content">
											<form action="{{url('updateyearlydatachange')}}" method="Post">
												@csrf
												<input type="hidden" name="id" value="{{$yearlydatum->id}}">
											<div class="row">
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">(OLD)NA/PP OP/CJ</label>
														<input type="text" name="old_na_pp_op_cj" value="{{$yearlydatum->old_na_pp_op_cj}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">(New)NA/PP OP/CJ</label>
														<input type="text" name="new_na_pp_op_cj" value="{{$yearlydatum->new_na_pp_op_cj}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Distt / Region</label>
														<input type="text" name="distt_region" value="{{$yearlydatum->distt_region}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Job Number</label>
														<input type="text" name="job_number" value="{{$yearlydatum->job_number}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Dia</label>
														<input type="text" name="dia" value="{{$yearlydatum->dia}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">M.S.P.E.</label>
														<input type="text" name="m_s_p_e" value="{{$yearlydatum->m_s_p_e}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Line Length meter</label>
														<input type="text" name="line_length_meter" value="{{$yearlydatum->line_length_meter}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Drawing</label>
														<input type="text" name="drawing" value="{{$yearlydatum->drawing}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-12 mb-2">
													<div class="form-group">
														<label class="text-label">Line Description</label>
														<textarea class="form-control" name="line_description" value="{{$yearlydatum->line_description}}" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2">{{$yearlydatum->line_description}}</textarea>
													</div>
												</div>

												<div class="col-lg-4 mb-2">
												<h2>Stringing</h2><br>
												</div>
												<div class="col-lg-8 mb-2">
												<h2>Welding / Fusion</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Stringing Age %</label>
														<input type="text" name="stringing_age" value="{{$yearlydatum->stringing_age}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Date monthly</label>
														<input type="text" name="welding_fusion_date" value="{{$yearlydatum->welding_fusion_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">This F.Y.</label>
														<input type="text" name="welding_fusion_this_f_y" value="{{$yearlydatum->welding_fusion_this_f_y}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-2">
												<h2>Tie-Ins / Crossings</h2><br>
												</div>
												<div class="col-lg-4 mb-2">
												<h2>Sleeving</h2><br>
												</div>
												<div class="col-lg-4 mb-2">
												<h2>Trenching</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Age %</label>
														<input type="text" name="tie_ins_crossing_age" value="{{$yearlydatum->tie_ins_crossing_age}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Age%</label>
														<input type="text" name="sleeving_age" value="{{$yearlydatum->sleeving_age}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Age %</label>
														<input type="text" name="trenching_age" value="{{$yearlydatum->trenching_age}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-12 mb-2">
												<h2>Backfilling</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Age %</label>
														<input type="text" name="backfilling_age" value="{{$yearlydatum->backfilling_age}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Date monthly</label>
														<input type="text" name="backfilling_date" value="{{$yearlydatum->backfilling_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">This F.Y.</label>
														<input type="text" name="backfilling_f_y" value="{{$yearlydatum->backfilling_f_y}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h1>Partial Commissioning</h1><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) Date Monthly</label>
														<input type="text" name="partial_commissioning_meter_date" value="{{$yearlydatum->partial_commissioning_meter_date}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning (meter) Date Monthly</label>
														<input type="text" name="commissioning_meter_date" value="{{$yearlydatum->commissioning_meter_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) This FY</label>
														<input type="text" name="partial_commissioning_meter_this_fy" value="{{$yearlydatum->partial_commissioning_meter_this_fy}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Partial Commissioning (meter) Total</label>
														<input type="text" name="partial_commissioning_meter_total" value="{{$yearlydatum->partial_commissioning_meter_total}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning Date</label>
														<input type="text" name="commissioning_date" value="{{$yearlydatum->commissioning_date}}" class="form-control">
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
														<input type="text" name="welding_start_date" value="{{$yearlydatum->welding_start_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">End Date</label>
														<input type="text" name="welding_end_date" value="{{$yearlydatum->welding_end_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Start Date</label>
														<input type="text" name="lowering_start_date" value="{{$yearlydatum->lowering_start_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">End Date</label>
														<input type="text" name="lowering_end_date" value="{{$yearlydatum->lowering_end_date}}" class="form-control">
													</div>
												</div>

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
														<input type="text" name="testing_chart_completion_date" value="{{$yearlydatum->testing_chart_completion_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Time</label>
														<input type="text" name="testing_chart_completion_time" value="{{$yearlydatum->testing_chart_completion_time}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Commissioning (Date)</label>
														<input type="text" name="partial_commissioning_date" value="{{$yearlydatum->partial_commissioning_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Date</label>
														<input type="text" name="comm_date" value="{{$yearlydatum->comm_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>Contractor and Payment</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Name</label>
														<input type="text" name="contractor_and_payment_name" value="{{$yearlydatum->contractor_and_payment_name}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount</label>
														<input type="text" name="contractor_ppc_amount" value="{{$yearlydatum->contractor_ppc_amount}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Date</label>
														<input type="text" name="ppc_amount_date" value="{{$yearlydatum->ppc_amount_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Paid</label>
														<input type="text" name="contractor_ppc_amount_paid" value="{{$yearlydatum->contractor_ppc_amount_paid}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">PPC Amount Paid Date</label>
														<input type="text" name="ppc_amount_paid_date" value="{{$yearlydatum->ppc_amount_paid_date}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount</label>
														<input type="text" name="contractor_fpc_amount" value="{{$yearlydatum->contractor_fpc_amount}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Date</label>
														<input type="text" name="fpc_amount_date" value="{{$yearlydatum->fpc_amount_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Paid</label>
														<input type="text" name="contractor_fpc_amount_paid" value="{{$yearlydatum->contractor_fpc_amount_paid}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">FPC Amount Paid Date</label>
														<input type="text" name="fpc_amount_paid_date" value="{{$yearlydatum->fpc_amount_paid_date}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">MNA</label>
														<input type="text" name="mna" value="{{$yearlydatum->mna}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">JOB HOLDER</label>
														<input type="text" name="job_holder" value="{{$yearlydatum->job_holder}}" class="form-control">
													</div>
												</div>

												<div class="col-lg-12 mb-2">
												<h2>BUDGET</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">BUDGET</label>
														<input type="text" name="budget" value="{{$yearlydatum->budget}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">COMPLETION REPORT</label>
														<input type="text" name="completion_report" value="{{$yearlydatum->completion_report}}" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Camp</label>
														<input type="text" name="camp" value="{{$yearlydatum->camp}}" class="form-control">
													</div>
												</div>
												<button type="submit" class="btn btn-primary btn-block">Submit</button>
											</div>

										</form>
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