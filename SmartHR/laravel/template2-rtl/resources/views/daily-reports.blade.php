<?php $page="daily-reports";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid">

                    <!-- Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head-box">
                                <h3>Daily Report</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Daily Report</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp"> PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">101</h3>
                                        <h2>Total Employees</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">84</h3>
                                        <h2>Today Present</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">12</h3>
                                        <h2>Today Absent</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">5</h3>
                                        <h2>Today Left</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="add-emp-section">
                                <a href="add-estimate" class="btn btn-success btn-add-emp"><i class="fas fa-plus"></i> Add Estimate</a>
                            </div>
                        </div>
                    </div>
                    <!-- Search Filter -->
                    
                    <!-- Content Starts -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Date</th>
                                            <th>Department</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>#0001</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>Design</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Week off</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>#0002</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>Web Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-danger btn-sm">Absent</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>#003</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>Android Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Week off</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    <a href="profile">Mike Litorus <span>#004</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>IOS Developer</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Week off</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="profile">Wilmer Deluna <span>#005</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>Team Leader</td>
                                            <td class="text-center">
                                                <button class="btn btn-outline-info btn-sm">Week off</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                
                    <!-- /Content End -->
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection