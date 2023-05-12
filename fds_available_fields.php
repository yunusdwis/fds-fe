<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finlab.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:37:24 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="" >
	<meta name="robots" content="" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:title" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template" >
	<meta property="og:image" content="../../finlab.dexignlab.com/xhtml/social-image.png" >
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE -->
	<title>FinLab Crypto Trading UI Admin</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" >
	<link href="vendor/wow-master/css/libs/animate.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/bootstrap-select-country/css/bootstrap-select-country.min.css">
	<link rel="stylesheet" href="vendor/jquery-nice-select/css/nice-select.css">
	<link href="vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!--swiper-slider-->
	<link rel="stylesheet" href="vendor/swiper/css/swiper-bundle.min.css">
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
	  <div class="loader"></div>
	</div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">
        <?php include 'components/logo.php' ?>
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
				</ul>
			</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->

        <?php include 'components/header.php' ?>
        <?php include 'components/sidebar.php' ?>

		<!--****
		Wallet Sidebar
		****-->
		<div class="wallet-bar wow fadeInRight dlab-scroll active" id="wallet-bar" data-wow-delay="0.7s">	
				<div class="row ">
					<!--column-->
					<div class="col-xl-12">
						<div class="card bg-transparent contacts mb-1">
							<div class="card-header border-0 pb-0 px-3 pt-2">
								<div>
									<h2 class="heading mb-0">Contacts</h2>
									<span>You have <span class="font-w600">456</span> contacts</span>
								</div>
								<div >
									<a href="#" class="add" data-bs-toggle="modal" data-bs-target="#exampleModal">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 3C7.05 3 3 7.05 3 12C3 16.95 7.05 21 12 21C16.95 21 21 16.95 21 12C21 7.05 16.95 3 12 3ZM12 19.125C8.1 19.125 4.875 15.9 4.875 12C4.875 8.1 8.1 4.875 12 4.875C15.9 4.875 19.125 8.1 19.125 12C19.125 15.9 15.9 19.125 12 19.125Z" fill="white"/>
											<path d="M16.3503 11.0251H12.9753V7.65009C12.9753 7.12509 12.5253 6.67509 12.0003 6.67509C11.4753 6.67509 11.0253 7.12509 11.0253 7.65009V11.0251H7.65029C7.12529 11.0251 6.67529 11.4751 6.67529 12.0001C6.67529 12.5251 7.12529 12.9751 7.65029 12.9751H11.0253V16.3501C11.0253 16.8751 11.4753 17.3251 12.0003 17.3251C12.5253 17.3251 12.9753 16.8751 12.9753 16.3501V12.9751H16.3503C16.8753 12.9751 17.3253 12.5251 17.3253 12.0001C17.3253 11.4751 16.8753 11.0251 16.3503 11.0251Z" fill="white"/>
										</svg>								
									</a>									
								</div>	
							</div>
							
							<div class="card-footer text-center border-0 pt-0 px-3">
								<a href="contact.html" class="btn btn-block btn-primary  dlab-load-more" id="RecentActivity" rel="ajax/recentactivity.html">View More</a>
							</div>
						</div>
					</div>
					<!--/column-->
					<!--column-->
					<div class="col-xl-12">
						<div class="card progressbar bg-transparent mb-0">
							<div class="card-header border-0 px-3 pb-0">
								<div>
									<h2 class="heading">Project</h2>
									<span class="fs-14 font-w400">You have <strong>456 </strong>contacts</span>
								</div>
								<div class="dropdown custom-dropdown">
									<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
										<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF"/>
										</svg>

									</div>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
										<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
									</div>
								</div>
							</div>
							<div class="card-body  p-3">
							</div>
						</div>
					</div>
					<!--/column-->
					<!--column-->
					<div class="col-xl-12 ">
						<div class="card tags bg-transparent ">
							<div class="card-header border-0  p-3 py-4 pb-0">
								<div>
									<h2 class="heading">Tag</h2>
								</div>
								
							</div>
							<div class="card-body  p-3 py-1 ">	
								
							
							</div>
						</div>		
					</div>
					<!--/column-->
					<!--column-->
					<div class="col-xl-12">
						<div class="card progressbar bg-transparent ">
							<div class="card-header border-0  p-3 pb-2">
								<div>
									<h2 class="heading">Server Status</h2>	
								</div>
								<div class="dropdown custom-dropdown">
									<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
										<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF"/>
										</svg>

									</div>
									
								</div>
							</div>
							<div class="card-body  p-3">
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-vigit progress-animated bg-pink" style="width: 15%; height:100%;" role="progressbar">
											<span class="sr-only">30% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-pink">10 AM</span>
										
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-secondary" style="width: 45%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-secondary">8 AM</span>
										
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-success" style="width: 45%; height:100%;" role="progressbar">
											<span class="sr-only">45% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-success">6 AM</span>
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-primary" style="width: 25%; height:100%;" role="progressbar">
											<span class="sr-only">25% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-primary">4 AM</span>
									</div>
								</div>
								<div class="server-content">
									<div class="progress default-progress">
										<div class="progress-bar bg-contact progress-animated bg-danger" style="width: 10%; height:100%;" role="progressbar">
											<span class="sr-only">15% Complete</span>
										</div>
									</div>
									<div class="d-flex align-items-end  pe-2 justify-content-between">
										<span class=" value text-danger">2 AM</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/column-->
					<!--column-->
					<div class="sidebar-footer">
					<div class="col-xl-12">
							
								<!--/column-->
								<!--column-->
								<div class="col-xl-4">
									<div class="sidebar-info">
										<span>
											<svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.367887 8.38398L7.44789 0.535979C7.73589 0.199978 8.26389 0.199978 8.55189 0.535979L15.6319 8.38398C16.0879 8.88798 15.7519 9.70398 15.0799 9.70398L0.919888 9.70398C0.247888 9.70398 -0.0881128 8.88798 0.367887 8.38398Z" fill="var(--primary)"/>
											</svg>
										</span>
										<h4><a href="#">2.0 mbps</a></h4>
									</div>
								</div>
								<!--/column-->
							</div>
							<!-- /row-->
						</div>
					</div>
				</div>
		
		<div class="wallet-bar-close"></div>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="page-titles style1">
									<div class="d-flex align-items-center">
										<h2 class="heading">Available Fields</h2>
									</div>
								</div>
							</div>
						</div>
                        <div class="filter cm-content-box box-primary">
                        <div class="card">
                            <div class="card-header">
                            <div class="mb-3">
							<a href="content-add.html" class="btn btn-primary">New...</a>
						</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Field Name</th>
                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td><strong>1</strong></td>
                                            <td>ATM.Id</td>
                                            </tr>
											<tr>
                                            <td><strong>2</strong></td>
                                            <td>ATM.Location</td>
                                            </tr>
											<tr>
                                            <td><strong>3</strong></td>
                                            <td>ATM.Usages</td>
                                            </tr>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!--**********************************
		Modal
	***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<!--swiper-slider-->
	<script src="vendor/swiper/js/swiper-bundle.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/wow-master/dist/wow.min.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-select-country/js/bootstrap-select-country.min.js"></script>
	
	<script src="js/dlabnav-init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script>
		
	$(function () {
			$("#datepicker").datepicker({ 
				autoclose: true, 
				todayHighlight: true
			}).datepicker('update', new Date());
	
	});

    $(document).ready(function(){
        $(".booking-calender .fa.fa-clock-o").removeClass(this);
        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
    });
	$('.my-select').selectpicker();
	</script>
</body>

<!-- Mirrored from finlab.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:38:15 GMT -->
</html>