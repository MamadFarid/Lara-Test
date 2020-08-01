<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
    <!--JSGrid css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
    <!-- Loader starts -->
    <div class="loader-wrapper">
        <div class="loader bg-white">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- Loader ends -->

    <!--page-wrapper Start-->
    <div class="page-wrapper">

        <!--Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-left">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img src="assets/images/logo-light.png" class="image-dark" alt="" />
                        <img src="assets/images/logo-light-dark-layout.png" class="image-light" alt="" />
                    </a>
                </div>
            </div>
            <div class="main-header-right row">
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch">
                            <input type="checkbox" id="sidebar-toggle" checked>
                            <span class="switch-state"></span>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown">
                            <div class="media  align-items-center">
                                <img class="align-self-center pull-right mr-2" src="assets/images/dashboard/user.png"
                                    alt="header-user" />
                                <div class="media-body">
                                    <h6 class="m-0 txt-dark f-16">
                                        My Account
                                        <i class="fa fa-angle-down pull-right ml-2"></i>
                                    </h6>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle">
                        <i class="icon-more"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Header Ends-->

        <!--Page Body wrapper Start-->
        <div class="page-body-wrapper">

            <!--Page Sidebar Start-->
            <div class="page-sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div>
                        <img class="img-50 rounded-circle" src="assets/images/user/1.jpg" alt="#">
                    </div>
                    <h6 class="mt-3 f-12">Johan Deo</h6>
                </div>
                <ul class="sidebar-menu">
                    <li class="active">
                        <div class="sidebar-title">General</div>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Instansi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Ustadz</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Santri</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Manajemen Kelas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Monitoring Hafalan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Akses Token</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>System Log</span>
                        </a>
                    </li>
                    <li>
                        <div class="sidebar-title">PENGANTURAN</div>
                        <a href="#" class="sidebar-header">
                            <i class="icon-desktop"></i><span>Pengaturan Akun</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-widget text-center">
                    <div class="sidebar-widget-top">
                        <h6 class="mb-2 fs-14">Need Help</h6>
                        <i class="icon-bell"></i>
                    </div>
                    <div class="sidebar-widget-bottom p-20 m-20">
                        <p>+1 234 567 899
                            <br>help@pixelstrap.com
                            <br><a href="#">Visit FAQ</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Page Sidebar Ends-->


            @yield('content')    


        </div>
        <!--Page Body wrapper Ends-->
    </div>
    <!--page-wrapper Ends-->

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
    <!-- google Chart JS-->
    <script src="{{ asset('assets/js/chart/google-chart-loader.js') }}"></script>
    <script src="{{ asset('assets/js/chart/google-chart.js') }}"></script>
    <!-- owlcarousel js-->
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables/datatable.custom.js') }}"></script>
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-default.js') }}"></script>
    <!-- Counter js-->
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>

</body>

</html>