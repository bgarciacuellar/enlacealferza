<?php $page="leads";?>
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
                                <h3>Leads</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Leads</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-nowrap custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lead Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Project</th>
                                            <th>Assigned Staff</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#">Wilmer Deluna</a>
                                                </h2>
                                            </td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Hospital Administration</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
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
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>10 hours ago</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
                                                    <a href="#">Lesley Grauer</a>
                                                </h2>
                                            </td>
                                            <td>lesleygrauer@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Video Calling App</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>5 Mar 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    <a href="#">Jeffery Lalor</a>
                                                </h2>
                                            </td>
                                            <td>jefferylalor@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Office Management</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>27 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#">Wilmer Deluna</a>
                                                </h2>
                                            </td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Hospital Administration</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>10 hours ago</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>05</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
                                                    <a href="#">Lesley Grauer</a>
                                                </h2>
                                            </td>
                                            <td>lesleygrauer@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Video Calling App</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>5 Mar 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    <a href="#">Jeffery Lalor</a>
                                                </h2>
                                            </td>
                                            <td>jefferylalor@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Office Management</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>27 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>07</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#">Wilmer Deluna</a>
                                                </h2>
                                            </td>
                                            <td>wilmerdeluna@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Hospital Administration</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>10 hours ago</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>08</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></a>
                                                    <a href="#">Lesley Grauer</a>
                                                </h2>
                                            </td>
                                            <td>lesleygrauer@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Video Calling App</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>5 Mar 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>09</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                                                    <a href="#">Jeffery Lalor</a>
                                                </h2>
                                            </td>
                                            <td>jefferylalor@example.com</td>
                                            <td>9876543210</td>
                                            <td><a href="project-view">Office Management</a></td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <a href="#" title="John Doe" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Richard Miles" data-toggle="tooltip"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="all-users">+15</a>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="role-info role-bg-two">Working</span></td>
                                            <td>27 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
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