<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finlab.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:37:24 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:title" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:description" content="FinLab : Crypto Trading UI Admin  Bootstrap 5 Template">
	<meta property="og:image" content="../../finlab.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE -->
	<title>FinLab Crypto Trading UI Admin</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
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
		<?php include 'components/logo.php'; ?>

		<?php include 'components/header.php'; ?>

		<?php include 'components/sidebar.php'; ?>


        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" novalidate >
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Current Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
														<input type="text" class="form-control" id="validationCustom01" >
														<div class="invalid-feedback">
				
														</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom02">New Password<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="validationCustom02"  >
														<div class="invalid-feedback">
															
														</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom03">Confirm New Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="validationCustom03" placeholder="" required>
														<div class="invalid-feedback">
										
														</div>
                                                    </div>
                                                    </div>
                                                <div class="mb-3 row">
                                                    <div class="col-lg-8 ms-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
	Modal
	***********************************-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel-1">Contact</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<label class="form-label d-block mb-2">Enter Name</label>
					<input type="text" class="form-control w-100 mb-3" placeholder="Username">

					<label class="form-label d-block mb-2">Enter Position</label>
					<input type="text" class="form-control w-100" placeholder="Username">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!--Modal-->

	<div class="modal fade" id="chat_model" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<label class="form-label d-block">Enter Name</label>
					<input type="text" class="form-control w-100" placeholder="Username">

					<label class="form-label d-block mt-3">Enter Position</label>
					<input type="text" class="form-control w-100" placeholder="Username">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
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
		$(function() {
			$("#datepicker").datepicker({
				autoclose: true,
				todayHighlight: true
			}).datepicker('update', new Date());

		});

		$(document).ready(function() {
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
		$('.my-select').selectpicker();
	</script>
</body>

<!-- Mirrored from finlab.dexignzone.com/xhtml/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:38:15 GMT -->

</html>