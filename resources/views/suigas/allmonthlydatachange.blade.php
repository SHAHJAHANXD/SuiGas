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
										<th>Status 1</th>
										<th>2 NOC Dept.</th>
										<th>Look Ahead Plan</th>
										<th>WELDING MATERIAL BOOKING 1/8 6010 (Kgs)</th>
										<th>WELDING MATERIAL BOOKING 5/32 7010 (Kgs)</th>
										<th>WELDING MATERIAL BOOKING 3/16 7010 (Kgs)</th>
										<th>WELDING MATERIAL BOOKING CUTTING DISC (Nos)</th>
										<th>WELDING MATERIAL BOOKING GRINDING DISC (Nos)</th>
										<th>WELDING MATERIAL BOOKING POWER BRUSH (Nos)</th>
										<th>BUDGET ACTUAL</th>
										<th>BUDGET BALANCE</th>
										<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($datachanges as $datachange)
                                            <tr>
												<td>{{$datachange->status_1}}</td>
												<td>{{$datachange->two_noc_dept}}</td>
												<td>{{$datachange->look_ahead_plan}}</td>
												<td>{{$datachange->welding_material_booking_1_8_6010_kgs}}</td>
												<td>{{$datachange->welding_material_booking_5_32_7010_kgs}}</td>
												<td>{{$datachange->welding_material_booking_3_16_7010_kgs}}</td>
												<td>{{$datachange->welding_material_booking_cutting_disc_nos}}</td>
												<td>{{$datachange->welding_material_booking_grinding_disc_nos}}</td>
												<td>{{$datachange->welding_material_booking_power_brush_nos}}</td>
												<td>{{$datachange->actual}}</td>
												<td>{{$datachange->balance}}</td>
												<td>
													<div class="d-flex">
														<a href="monthlydatachangeedit/{{ $datachange->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="monthlydatachangedelete/{{ $datachange->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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