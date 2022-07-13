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
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<div class="tab-content">
											<form action="{{url('monthdata')}}" method="Post">
												@csrf
											<div class="row">
												<div class="col-lg-12 mb-2">
												<h1>Welding / Fusion</h1><br>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">Status 1</label>
														<input type="text" name="status_1" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 mb-4">
													<div class="form-group">
														<label class="text-label">2 NOC Dept.</label>
														<input type="text" name="two_noc_dept" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">Look Ahead Plan</label>
														<input type="text" name="look_ahead_plan" class="form-control">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>WELDING MATERIAL BOOKING</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">1/8 6010 (Kgs)</label>
														<input type="text" name="welding_material_booking_1_8_6010_kgs" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">5/32 7010 (Kgs)</label>
														<input type="text" name="welding_material_booking_5_32_7010_kgs" class="form-control">
													</div>
												</div>
												<div class="col-lg- mb-4">
													<div class="form-group">
														<label class="text-label">3/16 7010 (Kgs)</label>
														<input type="text" name="welding_material_booking_3_16_7010_kgs" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">CUTTING DISC (Nos)</label>
														<input type="text" name="welding_material_booking_cutting_disc_nos" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">GRINDING DISC (Nos)</label>
														<input type="text" name="welding_material_booking_grinding_disc_nos" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">POWER BRUSH (Nos)</label>
														<input type="text" name="welding_material_booking_power_brush_nos" class="form-control">
													</div>
												</div>
												<div class="col-lg-12 mb-2">
												<h2>BUDGET</h2><br>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">ACTUAL</label>
														<input type="text" name="actual" class="form-control">
													</div>
												</div>
												<div class="col-lg-4 mb-4">
													<div class="form-group">
														<label class="text-label">BALANCE</label>
														<input type="text" name="balance" class="form-control">
													</div>
												</div>
												</div>
												<button type="submit" class="btn btn-primary btn-block">Submit</button>

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