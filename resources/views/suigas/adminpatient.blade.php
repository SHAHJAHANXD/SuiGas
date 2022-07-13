
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
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Users</h2>
						<p class="mb-0">Sui Gas Users</p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Create User</a>
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
										<th>User Name</th>
										<th>Email</th>
										<th>Role</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th>Allow Status</th>
										<th>Allow Status Action</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)

										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->role}}</td>
										<td>{{$user->created_at}}</td>
										<td>{{$user->updated_at}}</td>
                                        @if ($user->AllowStatus == 1)
                                        <td class="text-center"><span class="badge badge-success">Active</span></td>
                                        @endif
                                        @if ($user->AllowStatus == 0)
                                        <td class="text-center"><span class="badge badge-danger">Blocked</span></td>
                                        @endif
										<td>
                                                <a href="/user-profile-active/{{ $user->id }}" class="badge badge-success text-white" style="cursor: pointer;">Active</a>

                                                <a href="/user-profile-block/{{ $user->id }}" class="badge badge-danger text-white" style="cursor: pointer;">Block</a>

										</td>
                                        <td>
											<div class="d-flex">
												<a href="useredit/{{ $user->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="userdelete/{{ $user->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
