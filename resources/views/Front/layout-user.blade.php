<?php
use Illuminate\Support\Facades\Config;

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>

    <meta charset="utf-8" />
    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('front-style/assets/img/favicon.ico')}}">

    <!-- jsvectormap css -->
    <link href="{{asset('front-style/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{asset('front-style/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('front-style/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('front-style/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('front-style/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('front-style/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('front-style/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>          
                    <div class="d-flex align-items-center">

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{asset('front-style/assets/images/users/avatar-1.jpg')}}"
                                        alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{session('FRONT_USER_NAME')}}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="my-profile"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Change Password</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>        
                                <a class="dropdown-item" href="logout"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('front-style/assets/images/logo-white-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('front-style/assets/img/logo-white.png')}}" alt="" height="30">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index-2.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('front-style/assets/img/logo-white-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('front-style/assets/img/logo-white.png')}}" alt="" height="30">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                       
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="dashboard" >
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                <i class="ri-layout-grid-line"></i> <span data-key="t-tables">My Profile</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTables">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="my-profile" class="nav-link" data-key="t-basic-tables">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Change Password</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>  


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @section('container')
                    
                    @show

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

  
    <!-- JAVASCRIPT -->
    <script src="{{asset('front-style/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front-style/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('front-style/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('front-style/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('front-style/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('front-style/assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('front-style/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('front-style/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('front-style/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('front-style/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('front-style/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('front-style/assets/js/app.js')}}"></script>
</body>

</html>