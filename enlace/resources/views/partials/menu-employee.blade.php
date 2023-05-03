<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Enlace</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="{{ route('employee.tiketsList') }}" class="logo">
                    <img src="{{ asset('img/logo.svg') }}" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->

            {{-- <div class="header-center">
                <img src="{{ asset('img/logo-menu.png') }}" alt="" class="img-fluid">
            </div> --}}

            {{-- <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a> --}}

            {{-- <ul class="header-new-menu">
                <li>
                    <a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Clients</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="clients.html">Clients</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Projects</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="projects.html">Projects</a>
                        <a class="dropdown-item" href="tasks.html">Tasks</a>
                        <a class="dropdown-item" href="task-board.html">Task Board</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Leads</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="leads.html">Leads</a>
                    </div>
                </li>
                <li>
                    <a href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Tickets</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="tickets.html">Tickets</a>
                    </div>
                </li>
            </ul> --}}

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">

                {{-- <li>
                    <a href="#" class="report-btn">
                        <span class="material-icons-outlined">
                            text_snippet
                        </span>
                    </a>
                </li> --}}

                <li>
                    <!-- Header Search -->
                    {{-- <div class="page-title-box">
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                <!-- <input class="form-control" type="text" placeholder="Search"> -->

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <span class="material-icons-outlined">
                                            search
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <!-- /Header Search -->
                </li>

                <!-- Notifications -->
                {{-- <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge rounded-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('img/profiles/avatar-02.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('img/profiles/avatar-03.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('img/profiles/avatar-06.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('img/profiles/avatar-17.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('img/profiles/avatar-13.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li> --}}
                <!-- /Notifications -->
                <a class="pt-3" href="https://www.alferzajobs.com/" target="_blank">Publica tus vacantes gratis</a>
                <li class="nav-item dropdown has-arrow main-drop pt-3">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        {{-- <span class="user-img"><img src="{{ asset('img/profiles/avatar-21.jpg') }}" alt=""></span>
                        --}}
                        <span>{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">Cerrar
                            Sesión</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Cerrar
                        Sesión</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-left slimscroll">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-dashboard-tab" data-bs-toggle="pill" href="#v-pills-dashboard"
                        role="tab" aria-controls="v-pills-dashboard" aria-selected="false">
                        <span class="material-icons-outlined">
                            home
                        </span>
                    </a>
                    {{-- <a class="nav-link" id="v-pills-authentication-tab" title="IMSS" data-bs-toggle="pill"
                        href="#v-pills-authentication" role="tab" aria-controls="v-pills-authentication"
                        aria-selected="false">
                        <span class="material-icons-outlined">
                            perm_contact_calendar
                        </span>
                    </a> --}}
                    <a class="nav-link" id="v-pills-apps-tab" title="Alferza Jobs" href="https://www.alferzajobs.com/"
                        target="_blank">
                        <span class="material-icons-outlined">
                            work_outline
                        </span>
                    </a>
                </div>
            </div>

            <div class="sidebar-right">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel"
                        aria-labelledby="v-pills-dashboard-tab">
                        <p>Panel de administración</p>
                        <ul>
                            <li>
                                <a href="{{ route('employee.myCompany') }}">Mi empresa</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.tiketsList') }}">Incidencias</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.archivedTicketsList') }}">Incidencias
                                    Archivadas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-authentication" role="tabpanel"
                        aria-labelledby="v-pills-authentication-tab">
                        <p>IMSS</p>
                        <ul>
                            <li>
                                <a href="{{ route('imss.registerImssList') }}">Altas</a>
                            </li>
                            <li>
                                <a href="{{ route('imss.cancelImssList') }}">Bajas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid pb-0">

                <!-- Page Header -->
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="page-head-box">
                            <h3>Employee</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Employee</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div> --}}
                <!-- /Page Header -->
                <h3 class="title-page ps-3">
                    @yield('title')
                </h3>
                @yield('content')

            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('plugins/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('js/app_template.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/customize/getUserId.js') }}"></script>
    <script src="{{ asset('js/customize/helpers.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- ckeditor --}}
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif

    @yield('js')

</body>

</html>
