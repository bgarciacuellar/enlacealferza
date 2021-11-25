<?php $page="attendance-reports";?>
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
                                <h3>Attendance Reports</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Attendance Reports</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Search Filter -->
                    <div class="row filter-row mb-4">
                        <div class="col-sm-6 col-md-3"> 
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option>Select Department</option>
                                    <option>Designing</option>
                                    <option>Development</option>
                                    <option>Finance</option>
                                    <option>Hr & Finance</option>
                                </select>
                                <label class="focus-label">Department</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Date</th>
                                            <th>Workday</th>
                                            <th>Work</th>
                                            <th>Late Arrival</th>
                                            <th>Missing Work</th>
                                            <th>Extra Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Design</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <p class="mb-0">Morning Shift ( 8.0hrs )</p>
                                                <i class="fa fa-arrow-right text-success"></i> 9.30am | <i class="fa fa-arrow-left text-danger"></i> 7.30pm
                                            </td>
                                            <td><button class="btn btn-outline-success btn-sm">09</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">01</button></td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>#0002</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    <a href="profile">Mike Litorus <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <p class="mb-0">Morning Shift ( 8.0hrs )</p>
                                                <i class="fa fa-arrow-right text-success"></i> 9.30am | <i class="fa fa-arrow-left text-danger"></i> 6.30pm
                                            </td>
                                            <td><button class="btn btn-outline-success btn-sm">08</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">00</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="profile">Wilmer Deluna <span>Team Leader</span></a>
                                                </h2>
                                            </td>
                                            <td>20 Dec 2020</td>
                                            <td>
                                                <button class="btn btn-outline-danger btn-sm">Week off</button>
                                            </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>
                                                -
                                            </td>
                                            <td>
                                                -
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Employee Name</th>
                                            <th>Total Days</th>
                                            <th>Total Time</th>
                                            <th>Total Time Worked</th>
                                            <th>Total Late Arrival</th>
                                            <th>Total Missed Work</th>
                                            <th>Total Extra Work</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Design</span></a>
                                                </h2>
                                            </td>
                                            <td>01</td>
                                            <td>08</td>
                                            <td><button class="btn btn-outline-success btn-sm">09</button></td>
                                            <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                                            <td><button class="btn btn-outline-success btn-sm">01</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->

@endsection