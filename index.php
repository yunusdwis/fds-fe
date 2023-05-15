<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finlab.dexignzone.com/xhtml/ticketing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:38:34 GMT -->

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
    <link rel="stylesheet" href="vendor/jquery-nice-select/css/nice-select.css">

    <!--swiper-slider-->
    <link rel="stylesheet" href="vendor/swiper/css/swiper-bundle.min.css">

    <!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Style css -->
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
    <div id="main-wrapper" class=" show">
        <?php include 'components/logo.php'; ?>
        <?php include 'components/header.php'; ?>
        <?php include 'components/sidebar.php'; ?>

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
                                <div class="page-titles">
                                    <div class="d-flex align-items-center">
                                        <h2 class="heading">Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row wow fadeInUp main-card" data-wow-delay="0.7s">
                            <!--column-->
                            <div class="col-xxl-12 col-xl-9">
                                <div class="swiper ticketing-Swiper position-relative overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <!--swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="card ticket blue">
                                                <div class="back-image">
                                                    <svg width="102" height="100" viewBox="0 0 102 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.3">
                                                            <path d="M89.3573 123.082C59.4605 115.689 41.2417 85.3438 48.6706 55.2997C56.0995 25.2556 86.3609 6.89766 116.258 14.2901C146.155 21.6826 164.373 52.028 156.944 82.0721C149.516 112.116 119.254 130.474 89.3573 123.082Z" stroke="white" />
                                                            <path d="M91.021 116.351C64.8418 109.878 48.891 83.2911 55.4008 56.964C61.9106 30.6368 88.4137 14.5476 114.593 21.0208C140.772 27.4941 156.723 54.0807 150.213 80.4078C143.703 106.735 117.2 122.824 91.021 116.351Z" stroke="white" />
                                                            <path d="M82.6265 121.417C56.4473 114.944 40.4965 88.3576 47.0063 62.0304C53.5161 35.7033 80.0191 19.6141 106.198 26.0873C132.378 32.5605 148.328 59.1471 141.819 85.4743C135.309 111.801 108.806 127.891 82.6265 121.417Z" stroke="white" />
                                                            <path d="M73.9723 126.42C47.9385 119.983 32.1005 93.4265 38.6109 67.0969C45.1213 40.7672 71.5104 24.6525 97.5442 31.0897C123.578 37.527 139.416 64.0831 132.906 90.4127C126.395 116.742 100.006 132.857 73.9723 126.42Z" stroke="white" />
                                                            <path d="M65.3189 131.422C39.1396 124.949 23.1888 98.3625 29.6986 72.0353C36.2084 45.7082 62.7115 29.6189 88.8908 36.0922C115.07 42.5654 131.021 69.152 124.511 95.4792C118.001 121.806 91.4981 137.896 65.3189 131.422Z" stroke="white" />
                                                            <path d="M56.6647 136.425C30.6309 129.987 14.7929 103.431 21.3033 77.1017C27.8137 50.7721 54.2027 34.6573 80.2365 41.0946C106.27 47.5318 122.108 74.0879 115.598 100.418C109.088 126.747 82.6985 142.862 56.6647 136.425Z" stroke="white" />
                                                            <circle cx="59.7333" cy="94.0209" r="48.8339" transform="rotate(103.889 59.7333 94.0209)" stroke="white" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="card-body">
                                                    <div class="chart-num mb-3">
                                                        <h2>75</h2>
                                                    </div>
                                                    <div class="title">
                                                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.425781" width="8" height="8" fill="#FCFCFC" />
                                                        </svg>
                                                        <h4>Total ATM</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card ticket secondary">
                                                <div class="back-image">
                                                    <svg width="102" height="100" viewBox="0 0 102 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.3">
                                                            <path d="M89.3573 123.082C59.4605 115.689 41.2417 85.3438 48.6706 55.2997C56.0995 25.2556 86.3609 6.89766 116.258 14.2901C146.155 21.6826 164.373 52.028 156.944 82.0721C149.516 112.116 119.254 130.474 89.3573 123.082Z" stroke="white" />
                                                            <path d="M91.021 116.351C64.8418 109.878 48.891 83.2911 55.4008 56.964C61.9106 30.6368 88.4137 14.5476 114.593 21.0208C140.772 27.4941 156.723 54.0807 150.213 80.4078C143.703 106.735 117.2 122.824 91.021 116.351Z" stroke="white" />
                                                            <path d="M82.6265 121.417C56.4473 114.944 40.4965 88.3576 47.0063 62.0304C53.5161 35.7033 80.0191 19.6141 106.198 26.0873C132.378 32.5605 148.328 59.1471 141.819 85.4743C135.309 111.801 108.806 127.891 82.6265 121.417Z" stroke="white" />
                                                            <path d="M73.9723 126.42C47.9385 119.983 32.1005 93.4265 38.6109 67.0969C45.1213 40.7672 71.5104 24.6525 97.5442 31.0897C123.578 37.527 139.416 64.0831 132.906 90.4127C126.395 116.742 100.006 132.857 73.9723 126.42Z" stroke="white" />
                                                            <path d="M65.3189 131.422C39.1396 124.949 23.1888 98.3625 29.6986 72.0353C36.2084 45.7082 62.7115 29.6189 88.8908 36.0922C115.07 42.5654 131.021 69.152 124.511 95.4792C118.001 121.806 91.4981 137.896 65.3189 131.422Z" stroke="white" />
                                                            <path d="M56.6647 136.425C30.6309 129.987 14.7929 103.431 21.3033 77.1017C27.8137 50.7721 54.2027 34.6573 80.2365 41.0946C106.27 47.5318 122.108 74.0879 115.598 100.418C109.088 126.747 82.6985 142.862 56.6647 136.425Z" stroke="white" />
                                                            <circle cx="59.7333" cy="94.0209" r="48.8339" transform="rotate(103.889 59.7333 94.0209)" stroke="white" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="card-body">
                                                    <div class="chart-num mb-3">
                                                        <h2>75</h2>
                                                    </div>
                                                    <div class="title">
                                                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.425781" width="8" height="8" fill="#FCFCFC" />
                                                        </svg>
                                                        <h4>Connected</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card ticket pink">
                                                <div class="back-image">
                                                    <svg width="102" height="100" viewBox="0 0 102 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.3">
                                                            <path d="M89.3573 123.082C59.4605 115.689 41.2417 85.3438 48.6706 55.2997C56.0995 25.2556 86.3609 6.89766 116.258 14.2901C146.155 21.6826 164.373 52.028 156.944 82.0721C149.516 112.116 119.254 130.474 89.3573 123.082Z" stroke="white" />
                                                            <path d="M91.021 116.351C64.8418 109.878 48.891 83.2911 55.4008 56.964C61.9106 30.6368 88.4137 14.5476 114.593 21.0208C140.772 27.4941 156.723 54.0807 150.213 80.4078C143.703 106.735 117.2 122.824 91.021 116.351Z" stroke="white" />
                                                            <path d="M82.6265 121.417C56.4473 114.944 40.4965 88.3576 47.0063 62.0304C53.5161 35.7033 80.0191 19.6141 106.198 26.0873C132.378 32.5605 148.328 59.1471 141.819 85.4743C135.309 111.801 108.806 127.891 82.6265 121.417Z" stroke="white" />
                                                            <path d="M73.9723 126.42C47.9385 119.983 32.1005 93.4265 38.6109 67.0969C45.1213 40.7672 71.5104 24.6525 97.5442 31.0897C123.578 37.527 139.416 64.0831 132.906 90.4127C126.395 116.742 100.006 132.857 73.9723 126.42Z" stroke="white" />
                                                            <path d="M65.3189 131.422C39.1396 124.949 23.1888 98.3625 29.6986 72.0353C36.2084 45.7082 62.7115 29.6189 88.8908 36.0922C115.07 42.5654 131.021 69.152 124.511 95.4792C118.001 121.806 91.4981 137.896 65.3189 131.422Z" stroke="white" />
                                                            <path d="M56.6647 136.425C30.6309 129.987 14.7929 103.431 21.3033 77.1017C27.8137 50.7721 54.2027 34.6573 80.2365 41.0946C106.27 47.5318 122.108 74.0879 115.598 100.418C109.088 126.747 82.6985 142.862 56.6647 136.425Z" stroke="white" />
                                                            <circle cx="59.7333" cy="94.0209" r="48.8339" transform="rotate(103.889 59.7333 94.0209)" stroke="white" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="card-body">
                                                    <div class="chart-num mb-3">
                                                        <h2>75</h2>
                                                    </div>
                                                    <div class="title">
                                                        <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0.425781" width="8" height="8" fill="#FCFCFC" />
                                                        </svg>
                                                        <h4>Disconnected</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row-->
                            </div>
                            <!--/column-->
                            <div class="col-xl-8 wow fadeInUp" data-wow-delay="1.5s">
                                <div class="card crypto-chart ">
                                    <div class="card-header pb-0 border-0 flex-wrap">
                                        <div class="mb-2 mb-sm-0">
                                            <div class="chart-title mb-3">
                                                <h2 class="heading">Project Statistic</h2>
                                            </div>
                                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                                <div class="round weekly" id="dzOldSeries">
                                                    <div>
                                                        <input type="checkbox" id="checkbox1" name="radio" value="weekly">
                                                        <label for="checkbox1" class="checkmark"></label>
                                                    </div>
                                                    <div>
                                                        <span class="fs-14">This Week</span>
                                                        <h4 class="fs-5 font-w600 mb-0">1.982</h4>
                                                    </div>
                                                </div>
                                                <div class="round" id="dzNewSeries">
                                                    <div>
                                                        <input type="checkbox" id="checkbox" name="radio" value="monthly">
                                                        <label for="checkbox" class="checkmark"></label>
                                                    </div>
                                                    <div>
                                                        <span class="fs-14">This Week</span>
                                                        <h4 class="fs-5 font-w600 mb-0">1.982</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-static">
                                            <div class="d-flex align-items-center mb-3 ">
                                                <select class="image-select default-select dashboard-select" aria-label="Default">
                                                    <option selected>This Month</option>
                                                    <option value="1">This Weeks</option>
                                                    <option value="2">Today</option>
                                                </select>
                                                <div class="dropdown custom-dropdown">
                                                    <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                                        <svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="
														" />
                                                        </svg>

                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="javascript:void(0);">Option
                                                            1</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option
                                                            2</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Option
                                                            3</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-content">
                                                <div class="d-flex justify-content-between">
                                                    <h6>Total</h6>
                                                    <span class="pull-end">3.982</span>
                                                </div>
                                                <div class="progress mt-1">
                                                    <div class="progress-bar bg-primary" style="width: 70%; height:	100%;" role="progressbar">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body pt-2 custome-tooltip pb-0">
                                        <div id="activity"></div>
                                    </div>
                                </div>
                            </div>
                            <!--column-->
                            <div class="col-xxl-4 col-xl-3">
                                <div class="card">
                                    <div class="card-header border-0">
                                        <h2 class="heading">Email</h2>
                                        <div class="dropdown custom-dropdown">
                                            <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                                <svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="#01A3FF" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center pt-0 pb-2">
                                        <div id="pieChart" class="d-inline-block"></div>
                                        <div class="chart-items">
                                            <!--row-->
                                            <div class="row">
                                                <!--column-->
                                                <div class=" col-xl-12 col-sm-12">
                                                    <div class="text-start mt-2">
                                                        <span class="font-w600 mb-3 d-block text-black fs-14">Legend</span>
                                                        <div class="color-picker">
                                                            <span class="mb-0 col-6 fs-14">
                                                                <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="14" height="14" rx="4" fill="#9568FF" />
                                                                </svg>
                                                                Inquiry
                                                            </span>
                                                            <h5>763</h5>
                                                        </div>
                                                        <div class="color-picker">
                                                            <span class="mb-0 col-6 fs-14">
                                                                <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="14" height="14" rx="4" fill="#FF5166" />
                                                                </svg>
                                                                Cash Widrawal
                                                            </span>
                                                            <h5>321</h5>
                                                        </div>
                                                        <div class="color-picker">
                                                            <span class="mb-0 col-6 fs-14">
                                                                <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="14" height="14" rx="4" fill="#ED3DD1" />
                                                                </svg>
                                                                Transfer
                                                            </span>
                                                            <h5>154</h5>
                                                        </div>
                                                        <div class="color-picker">
                                                            <span class="mb-0 col-6 fs-14">
                                                                <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="14" height="14" rx="4" fill="#2BC844" />
                                                                </svg>
                                                                Purchase
                                                            </span>
                                                            <h5>154</h5>
                                                        </div>
                                                        <div class="color-picker">
                                                            <span class="mb-0 col-6 fs-14">
                                                                <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="14" height="14" rx="4" fill="#2BC844" />
                                                                </svg>
                                                                Purchase
                                                            </span>
                                                            <h5>154</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/column-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/column-->

                            <!--column-->
                            <div class="col-lg-6 col-sm-6 wow fadeInUp">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="flotBar1" class="flot-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/column-->
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

    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="js/plugins-init/flot-init.js"></script>

    <!-- Dashboard 1 -->
    <script src="vendor/wow-master/dist/wow.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/dashboard/dashboard-1.js"></script>

    <script>
        var swiper = new Swiper('.ticketing-Swiper', {
            speed: 1500,
            slidesPerView: 4,
            spaceBetween: 40,
            parallax: true,
            loop: false,
            breakpoints: {

                300: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>


</body>

<!-- Mirrored from finlab.dexignzone.com/xhtml/ticketing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 06:38:35 GMT -->

</html>