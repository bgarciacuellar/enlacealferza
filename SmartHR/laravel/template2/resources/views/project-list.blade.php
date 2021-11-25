<?php $page="project-list";?>
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
                                <h3>Projects</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">  
                                    <div class="form-group form-focus mb-0">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Project Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">  
                                    <div class="form-group form-focus mb-0">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Employee Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3"> 
                                    <div class="form-group form-focus select-focus mb-0">
                                        <select class="select floating"> 
                                            <option>Select Roll</option>
                                            <option>Web Developer</option>
                                            <option>Web Designer</option>
                                            <option>Android Developer</option>
                                            <option>Ios Developer</option>
                                        </select>
                                        <label class="focus-label">Designation</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">  
                                    <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="projects" class="grid-icon"><i class="fas fa-th"></i></a>
                                <a href="project-list" class="list-icon active"><i class="fas fa-bars"></i></a>
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#create_project"><i class="fas fa-plus"></i> Create Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Project Id</th>
                                            <th>Leader</th>
                                            <th>Team</th>
                                            <th>Deadline</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="project-view">Office Management</a>
                                            </td>
                                            <td>PRO-0001</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members text-nowrap">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li class="dropdown avatar-dropdown">
                                                        <a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <div class="avatar-group">
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-09.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-10.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-05.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-11.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-12.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-13.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-01.jpg">
                                                                </a>
                                                                <a class="avatar avatar-xs" href="#">
                                                                    <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-pagination">
                                                                <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Previous">
                                                                            <span aria-hidden="true">«</span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">»</span>
                                                                        <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Project Management</a>
                                            </td>
                                            <td>PRO-0002</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Video Calling App</a>
                                            </td>
                                            <td>PRO-0003</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Low </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Hospital Administration</a>
                                            </td>
                                            <td>PRO-0004</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Office Management</a>
                                            </td>
                                            <td>PRO-0005</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Project Management</a>
                                            </td>
                                            <td>PRO-0006</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Video Calling App</a>
                                            </td>
                                            <td>PRO-0007</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Hospital Administration</a>
                                            </td>
                                            <td>PRO-0008</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Office Management</a>
                                            </td>
                                            <td>PRO-0009</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Project Management</a>
                                            </td>
                                            <td>PRO-0010</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="project-view">Video Calling App</a>
                                            </td>
                                            <td>PRO-0011</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="John Smith" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Mike Litorus" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>17 Apr 2019 </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-two dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a href="" class="role-info role-bg-three dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_project"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_project"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Create Project Modal -->
                <div id="create_project" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>Global Technologies</option>
                                                    <option>Delta Infotech</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <input placeholder="$50" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <select class="select">
                                                    <option>Hourly</option>
                                                    <option>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <select class="select">
                                                    <option>High</option>
                                                    <option>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Project Leader</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Leader</label>
                                                <div class="project-members">
                                                    <a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Team</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Members</label>
                                                <div class="project-members">
                                                    <a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
                                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
                                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
                                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
                                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                                    </a>
                                                    <span class="all-team">+2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Files</label>
                                        <input class="form-control" type="file">
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Create Project Modal -->
                
                <!-- Edit Project Modal -->
                <div id="edit_project" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input class="form-control" value="Project Management" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>Global Technologies</option>
                                                    <option>Delta Infotech</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <input placeholder="$50" class="form-control" value="$5000" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <select class="select">
                                                    <option>Hourly</option>
                                                    <option selected>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <select class="select">
                                                    <option selected>High</option>
                                                    <option>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Project Leader</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Leader</label>
                                                <div class="project-members">
                                                    <a href="#" data-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Team</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Members</label>
                                                <div class="project-members">
                                                    <a href="#" data-toggle="tooltip" title="John Doe" class="avatar">
                                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="Richard Miles" class="avatar">
                                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="John Smith" class="avatar">
                                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" title="Mike Litorus" class="avatar">
                                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                                    </a>
                                                    <span class="all-team">+2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Files</label>
                                        <input class="form-control" type="file">
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Project Modal -->
                
                <!-- Delete Project Modal -->
                <div class="modal custom-modal fade" id="delete_project" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Project</h3>
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
                <!-- /Delete Project Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection