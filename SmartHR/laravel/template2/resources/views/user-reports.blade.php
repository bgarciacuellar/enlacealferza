<?php $page="user-reports";?>
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
                                <h3>User Reports</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">User Reports</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Content Starts -->
                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-3">  
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
                                <label class="focus-label">User Role</label>
                            </div>
                        </div>
                    
                        <div class="col-sm-6 col-md-3">  
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
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Designation</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt=""></a>
                                                    <a href="profile">Barry Cuda <span>Global Technologies</span></a>
                                                </h2>
                                            </td>
                                            <td>Global Technologies</td>
                                            <td>barrycuda@example.com</td>
                                            <td>
                                                <span class="role-info role-bg-one">Client</span>
                                            </td>
                                            <td>CEO</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img src="assets/img/profiles/avatar-21.jpg" alt=""></a>
                                                    <a href="profile">Daniel Porter <span>Admin</span></a>
                                                </h2>
                                            </td>
                                            <td>Focus Technologies</td>
                                            <td>danielporter@example.com</td>
                                            <td>
                                                <span class="role-info role-bg-one">Admin</span>
                                            </td>
                                            <td>Admin Manager</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="#" class="role-info role-bg-two"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                </div>
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