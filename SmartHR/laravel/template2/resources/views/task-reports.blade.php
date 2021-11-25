<?php $page="task-reports";?>
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
                                <h3>Task Reports</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Task Reports</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                        <!-- Content Starts -->
                        <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-4">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            Name1
                                        </option>
                                        <option>
                                            Name2
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Project Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">  
                            <div class="form-group form-focus mb-0">
                                <div class="cal-icon">
                                    <select class="form-control floating select">
                                        <option>
                                            All
                                        </option>
                                        <option>
                                            Pending
                                        </option>
                                        <option>
                                            Completed
                                        </option>
                                    </select>
                                </div>
                                <label class="focus-label">Status</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">  
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>  
                        </div>     
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Assigned To</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hospital Administration</td>
                                            <td>26 Mar 2019</td>
                                            <td>26 Apr 2021</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Hospital Administration</td>
                                            <td>26 Mar 2019</td>
                                            <td>26 Apr 2021</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="" data-original-title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
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