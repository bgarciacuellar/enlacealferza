<?php $page="interviewing";?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid pb-0">

                    <!-- Page Header -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head-box">
                                <h3>Interviewing</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Interviewing</li>
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
                                <li class="nav-item"><a class="nav-link" href="user-dashboard">Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="user-all-jobs">All </a></li>
                                <li class="nav-item"><a class="nav-link" href="saved-jobs">Saved</a></li>
                                <li class="nav-item"><a class="nav-link" href="applied-jobs">Applied</a></li>
                                <li class="nav-item"><a class="nav-link active" href="interviewing">Interviewing</a></li>
                                <li class="nav-item"><a class="nav-link" href="offered-jobs">Offered</a></li>
                                <li class="nav-item"><a class="nav-link" href="visited-jobs">Visitied </a></li>
                                <li class="nav-item"><a class="nav-link" href="archived-jobs">Archived </a></li>
                            </ul>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card nav-vert">
                                <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Apptitude</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Schedule Interview</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane show active">
                                        <div class="card-box">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table mb-0 datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Job Title</th>
                                                            <th>Department</th>
                                                            <th class="text-center">Job Type</th>
                                                            <th class="text-center">Aptitude Test</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="job-aptitude" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="job-aptitude" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="#">Web Designing</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="job-aptitude" class="role-info role-bg-two aptitude-btn"><span>Click Here</span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="card-box">
                                            <div class="table-responsive">
                                                <table class="table table-striped custom-table mb-0 datatable">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Job Title</th>
                                                            <th>Department</th>
                                                            <th class="text-center">Job Type</th>
                                                            <th class="text-center">Aptitude Test</th>
                                                            <th class="text-center">Schedule Interview</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td><a href="#">Web Designing</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td><a href="#">Web Developer</a></td>
                                                            <td>Development</td>
                                                            <td class="text-center">
                                                                <div class="action-label">
                                                                    <a class="role-info role-bg-one" href="#">
                                                                    <i class="fa fa-dot-circle-o text-warning"></i> Part Time
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-two disabled"><span>Selected</span></a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" class="role-info role-bg-three aptitude-btn" data-toggle="modal" data-target="#selectMyTime"><span>Select Your Time Here</span></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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