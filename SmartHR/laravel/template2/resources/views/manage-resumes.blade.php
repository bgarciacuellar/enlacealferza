<?php $page="manage-resumes";?>
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
                                <h3>Manage Resumes</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Manage Resumes</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Start Date</th>
                                            <th>Expire Date</th>
                                            <th class="text-center">Job Type</th>
                                            <th class="text-center">Status</th>
                                            <th>Resume</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Web Developer</a></td>
                                            <td>Development</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Full Time
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Open
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download mr-1"></i> Download</a></td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Web Designer</a></td>
                                            <td>Designing</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Part Time
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Closed
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download mr-1"></i> Download</a></td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Android Developer</a></td>
                                            <td>Android</td>
                                            <td>3 Mar 2019</td>
                                            <td>31 May 2019</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Internship
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Full Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Part Time</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Internship</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Temporary</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Other</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Cancelled
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="javascript:void(0);" class="role-info role-bg-three"><i class="fa fa-download mr-1"></i> Download</a></td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->

                <!-- Delete Job Modal -->
                <div class="modal custom-modal fade" id="delete_job" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Delete Job Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection