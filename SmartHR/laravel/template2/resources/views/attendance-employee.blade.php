<?php $page="attendance-employee";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

                    <!-- Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head-box">
                                <h3>Attendance</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div class="card punch-status flex-fill">
                                <div class="card-body">
                                    <h5 class="card-title">Timesheet</h5>

                                    <div class="punch-finger">
                                        <i class="fas fa-fingerprint"></i>
                                        <div class="punch-det">
                                            <h6>Punch In at</h6>
                                            <p>Wed, 11th Mar 2019 10.00 AM</p>
                                        </div>
                                    </div>
                                    
                                    <div class="punch-info">
                                        <div class="punch-hours">
                                            <span>12:50</span>
                                        </div>
                                    </div>
                                    <div class="punch-btn-section">
                                        <span>Punch in</span>
                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual" checked>
                                            <label class="onoffswitch-label" for="switch_annual">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                        <span>Punch out</span>
                                    </div>
                                    <div class="statistics">
                                        <ul>
                                            <li>
                                                <div class="stats-box">
                                                    <p>Break</p>
                                                    <h6>1.21 hrs</h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="stats-box">
                                                    <p>Overtime</p>
                                                    <h6>3 hrs</h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <h5 class="card-sub-title">Statistics</h5>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card st-card st-c1">
                                                <div class="stats-info">
                                                    <div>
                                                        <p>Today</p>
                                                        <h5>3.45 / 8 hrs</h5>
                                                    </div>
                                                    
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card st-card st-c2">
                                                <div class="stats-info">
                                                    <div>
                                                        <p>This Week</p>
                                                        <h5>3.45 / 8 hrs</h5>
                                                    </div>
                                                    
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card st-card st-c3">
                                                <div class="stats-info">
                                                    <div>
                                                        <p>This month</p>
                                                        <h5>3.45 / 8 hrs</h5>
                                                    </div>
                                                    
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card st-card st-c4">
                                                <div class="stats-info">
                                                    <div>
                                                        <p>Remaining</p>
                                                        <h5>3.45 / 8 hrs</h5>
                                                    </div>
                                                    
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="card st-card st-c5">
                                                <div class="stats-info">
                                                    <div>
                                                        <p>Overtime</p>
                                                        <h5>4</h5>
                                                    </div>
                                                    
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="col-md-4 d-flex">
                            <div class="card recent-activity flex-fill">
                                <div class="card-body">
                                    <h5 class="card-title">Today Activity</h5>
                                    <ul class="res-activity-list">
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                10.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                11.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                11.15 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                1.30 PM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                2.00 PM.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-sm-3">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <input type="text" class="form-control floating datetimepicker">
                                </div>
                                <label class="focus-label">Date</label>
                            </div>
                        </div>
                        <div class="col-sm-3"> 
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option>-</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                                </select>
                                <label class="focus-label">Select Month</label>
                            </div>
                        </div>
                        <div class="col-sm-3"> 
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option>-</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                    <option>2016</option>
                                    <option>2015</option>
                                </select>
                                <label class="focus-label">Select Year</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable att-emp-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date </th>
                                            <th>Punch In</th>
                                            <th>Punch Out</th>
                                            <th>Production</th>
                                            <th>Break</th>
                                            <th>Overtime</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>19 Feb 2019</td>
                                            <td>10 AM</td>
                                            <td>7 PM</td>
                                            <td>9 hrs</td>
                                            <td>1 hrs</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>20 Feb 2019</td>
                                            <td>10 AM</td>
                                            <td>7 PM</td>
                                            <td>9 hrs</td>
                                            <td>1 hrs</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- Page Wrapper -->


@endsection