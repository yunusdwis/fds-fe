<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from finlab.dexignzone.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:39:19 GMT -->

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
    <!-- Daterange picker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">

    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
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
    <div id="main-wrapper">

        <?php include 'components/logo.php'; ?>
        <?php include 'components/header.php'; ?>
        <?php include 'components/sidebar.php'; ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles style1">
                            <div class="d-flex align-items-center">
                                <h2 class="heading">Audit Trail</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label class="text-label form-label">Start Date</label>
                                            <input name="datepicker" class="datepicker-default form-control" id="datepicker" style="cursor: pointer;" placeholder="23-05-2023">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                                <label class="form-label">Activity</label>
                                                <select class="default-select form-control wide">
                                                    <option selected>All</option>
                                                    <option>Login</option>
                                                    <option>Logout</option>
                                                    <option>Create Rule</option>
                                                    <option>Delete Rule</option>
                                                    <option>Acknowledge Fraud Transaction</option>
                                                    <option>Print Report</option>
                                                </select> 
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label">End Date</label>
                                                <input name="datepicker" class="datepicker-default form-control" id="datepicker" style="cursor: pointer;" placeholder="23-05-2023">
                                            </div>
                                        </div>
                                    

                                    <div class="col-md-6">
                                        <label class="text-label form-label">User Name</label>
                                        <input type="number" class="number-default form-control" min="" max="" id="number" style="cursor: pointer;" placeholder="0">
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Datetime</th>
                                                <th>User</th>
                                                <th>Activities</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2023-01-14 08:01:13</td>
                                                <td>fds_user</td>
                                                <td>Login</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2023-01-14 08:12:38</td>
                                                <td>fds_user</td>
                                                <td>Print Report</td>
                                                <td>Report monthly summary</td>
                                            </tr>
                                            <tr>
                                                <td>2023-01-14 11:22:25</td>
                                                <td>fds_user</td>
                                                <td>Create Rule</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>



    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>


<!-- Mirrored from finlab.dexignzone.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:39:20 GMT -->

</html>