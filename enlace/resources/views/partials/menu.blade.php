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

    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('img/logo.svg') }}" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Menu -->
            <ul class="nav user-menu">

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
                        role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
                        <span class="material-icons-outlined">
                            home
                        </span>
                    </a>
                    <a class="nav-link" id="v-pills-employees-tab" title="Empleados" data-bs-toggle="pill"
                        href="#v-pills-employees" role="tab" aria-controls="v-pills-employees"
                        aria-selected="false">
                        <span class="material-icons-outlined">
                            people
                        </span>
                    </a>
                    <a class="nav-link" id="v-pills-projects-tab" title="nóminas" data-bs-toggle="pill"
                        href="#v-pills-projects" role="tab" aria-controls="v-pills-projects"
                        aria-selected="false">
                        <span class="material-icons-outlined">
                            topic
                        </span>
                    </a>
                    <a class="nav-link" id="v-pills-leads-tab" title="Reportes" data-bs-toggle="pill"
                        href="#v-pills-leads" role="tab" aria-controls="v-pills-leads" aria-selected="false">
                        <span class="material-icons-outlined">
                            leaderboard
                        </span>
                    </a>
                    <a class="nav-link" id="v-pills-apps-tab" title="Alferza Jobs"
                        href="https://www.alferzajobs.com/" target="_blank">
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
                                <a href="{{ route('admin.dashboard') }}" class="active">Inicio</a>
                            </li>
                            <li>
                                <a href="{{ route('company.grid') }}">Empresas</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.announcementView') }}">Comunicados</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-employees" role="tabpanel"
                        aria-labelledby="v-pills-employees-tab">
                        <p>Empleados</p>
                        <ul>
                            <li>
                                <a href="{{ route('admin.usersListGrid') }}">Lista de Empleados</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-projects" role="tabpanel"
                        aria-labelledby="v-pills-projects-tab">
                        <p>Nóminas</p>
                        <ul>
                            <li>
                                <a href="{{ route('ticket.list') }}">Nóminas</a>
                            </li>
                            <li>
                                <a href="{{ route('ticket.archivedList') }}">Nóminas
                                    Archivadas</a>
                            </li>
                            <li>
                                <a href="{{ route('payroll.list') }}">Nóminas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-leads" role="tabpanel"
                        aria-labelledby="v-pills-leads-tab">
                        <p>Reportes</p>
                        <ul>
                            <li><a href="{{ route('reports.backupsView') }}">Reportes</a></li>
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

    {{-- select2 --}}
    <script type="text/javascript" src="{{ asset('js/select2/js/select2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

    <script>
        $('.modal-select').select2({
            dropdownParent: $('.modal-to-select2')
        });
    </script>

    @yield('js')

</body>

</html>
