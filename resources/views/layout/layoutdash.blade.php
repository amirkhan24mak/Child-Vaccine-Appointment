<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AV Health</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ url('/dstyle/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ url('/dstyle/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/dstyle/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('/dstyle/images/favicon.png') }}" />
</head>

<body>
    <div class="row" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
                <a href="https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
                    target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
                <i class="typcn typcn-delete-outline" id="bannerClose"></i>
            </span>
        </div>
    </div>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="{{ url('/dstyle/images/logo.svg') }}"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ url('/dstyle/images/logo-mini.svg') }}" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="typcn typcn-th-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name">{{session()->get('name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="typcn typcn-cog-outline text-primary"></i>
                                Settings
                            </a>
                            <a href="{{url('/logoutadmin')}}" class="dropdown-item">
                                <i class="typcn typcn-eject text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">

            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item ml-0">
                        <h4 class="mb-0">Dashboard</h4>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    {{-- extra --}}
                </ul>
            </div>
        </nav>


        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close typcn typcn-times"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                            <div class="badge badge-danger">admin</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="typcn typcn-document-text menu-icon"></i>
                            <span class="menu-title">Hospitals</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                {{-- <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('/dashobard/hostpital/add') }}">Add
                                        Hospital</a>
                                </li> --}}

                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('/dashobard/hostpital') }}">List Hospitals</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                          <i class="typcn typcn-th-small-outline menu-icon"></i>
                          <span class="menu-title">Users</span>
                          <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                          <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/Parents')}}">Users List</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/email')}}">Users Email</a></li>
                          </ul>
                        </div>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                            aria-controls="charts">
                            <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                            <span class="menu-title">Schedule</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/Setday')}}">Schedule List</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/dashboard/Setday/addday')}}">Schedule Add</a></li>
                            </ul>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false"
                            aria-controls="icons">
                            <i class="typcn typcn-compass menu-icon"></i>
                            <span class="menu-title">Appointments</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="icons">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/dashobard/Appomint')}}">Appointments
                                        List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false"
                            aria-controls="error">
                            <i class="typcn typcn-globe-outline menu-icon"></i>
                            <span class="menu-title">More</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="error">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/logoutadmin')}}"> Logout
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}"> Go to
                                        website
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->




            @yield('navcontaint')


            <!-- partial:partials/_footer.html -->
           
            <!-- partial -->
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <footer class="footer">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                        © 2023 <a href="#" class="text-muted" target="_blank">AV Health</a>. All
                        rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- base:js -->
    <script src="{{ url('/dstyle/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ url('/dstyle/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ url('/dstyle/js/off-canvas.js') }}"></script>
    <script src="{{ url('/dstyle/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('/dstyle/js/template.js') }}"></script>
    <script src="{{ url('/dstyle/js/settings.js') }}"></script>
    <script src="{{ url('/dstyle/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('/dstyle/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
