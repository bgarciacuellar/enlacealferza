<?php $page="user-dashboard";?>
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
                                <h3>User Job Dashboard</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">User Job Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Content Starts -->
                    <div class="card">
                        <div class="card-body">
                            <!-- <h4 class="card-title">Solid justified</h4> -->
                            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-item"><a class="nav-link active" href="user-dashboard">Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="user-all-jobs">All </a></li>
                                <li class="nav-item"><a class="nav-link" href="saved-jobs">Saved</a></li>
                                <li class="nav-item"><a class="nav-link" href="applied-jobs">Applied</a></li>
                                <li class="nav-item"><a class="nav-link" href="interviewing">Interviewing</a></li>
                                <li class="nav-item"><a class="nav-link" href="offered-jobs">Offered</a></li>
                                <li class="nav-item"><a class="nav-link" href="visited-jobs">Visitied </a></li>
                                <li class="nav-item"><a class="nav-link" href="archived-jobs">Archived </a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">112</h3>
                                        <h2>Offered</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">0</h3>
                                        <h2>Applied</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">0</h3>
                                        <h2>Visited</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="text-center w-100 p-3">
                                        <h3 class="bl-text mb-1">12</h3>
                                        <h2>Saved</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div class="row">
                        <div class="col-md-12 jb-dashboard">
                            <div class="row">
                                <div class="col-md-7 text-center d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
                                            <h3 class="card-title">Profiles Overview</h3>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Last 6 months
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Last 6 months</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                    <a class="dropdown-item" href="#">Last 1 months</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">                         
                                            <div id="chart22"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex">
                                    <div class="card flex-fill">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Jobs</h3>
                                        </div>

                                        <div class="card-body">
                                            <ul class="jb-info">
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-md-8">
                                                        <div class="jb-li-content">
                                                            <h3>UI Developer</h3>
                                                            <h5>Experience</h5>
                                                        </div>
                                                        <div class="jb-li-content mt-1">
                                                            <h6>1 hour Ago</h6>
                                                            <h2>9 years</h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <button class="btn btn-primary">Apply Now</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">Offered Jobs</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap custom-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Job Title</th>
                                                    <th>Department</th>
                                                    <th class="text-center">Job Type</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="job-details">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="job-details">Web Designer</a></td>
                                                    <td>Designing</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a href="job-details">Android Developer</a></td>
                                                    <td>Android</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="role-info role-bg-three download-offer"><span><i class="fa fa-download mr-1"></i> Download Offer</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                                                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table mb-0">
                                <div class="card-header">
                                    <h3 class="card-title mb-0">Applied Jobs</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-nowrap custom-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Job Title</th>
                                                    <th>Department</th>
                                                    <th>Start Date</th>
                                                    <th>Expire Date</th>
                                                    <th class="text-center">Job Type</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="job-details">Web Developer</a></td>
                                                    <td>Development</td>
                                                    <td>3 Mar 2019</td>
                                                    <td>31 May 2019</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Open
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-right ico-sec">
                                                        <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="job-details">Web Designer</a></td>
                                                    <td>Designing</td>
                                                    <td>3 Mar 2019</td>
                                                    <td>31 May 2019</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-success"></i> Closed
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-right ico-sec">
                                                        <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><a href="job-details">Android Developer</a></td>
                                                    <td>Android</td>
                                                    <td>3 Mar 2019</td>
                                                    <td>31 May 2019</td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-two" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="action-label">
                                                            <a class="role-info role-bg-one" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="text-right ico-sec">
                                                        <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                        <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- /Content End -->
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection