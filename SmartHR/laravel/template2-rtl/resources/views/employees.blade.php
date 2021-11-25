<?php $page="employees";?>
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
                                <h3>Employee</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Employee</li>
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
                                        <label class="focus-label">Employee ID</label>
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
                                            <option>Select Designation</option>
                                            <option>Web Developer</option>
                                            <option>Web Designer</option>
                                            <option>Android Developer</option>
                                            <option>Ios Developer</option>
                                        </select>
                                        <label class="focus-label">Designation</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">  
                                    <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="employees" class="grid-icon active"><i class="fas fa-th"></i></a>
                                <a href="employees-list" class="list-icon"><i class="fas fa-bars"></i></a>
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_employee"><i class="fas fa-plus"></i> Add Employee</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->


                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">Frontend Develpment</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">IOS</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>Martin Huges</h4>
                                    <h5>Web Designer</h5>
                                    <h6 class="bg-1">UI/UX</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4>Employee ID <span>FT-0001</span></h4>
                                    <h4>Date of Join <span>1st Jan 2013</span></h4>
                                </div>
                                <div class="card-footer">
                                    <a href="profile">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Employee Modal -->
                <div id="add_employee" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone </label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Company</label>
                                                <select class="select">
                                                    <option value="">Global Technologies</option>
                                                    <option value="1">Delta Infotech</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Department <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Select Department</option>
                                                    <option>Web Development</option>
                                                    <option>IT Management</option>
                                                    <option>Marketing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Designation <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Select Designation</option>
                                                    <option>Web Designer</option>
                                                    <option>Web Developer</option>
                                                    <option>Android Developer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive m-t-15">
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Module Permission</th>
                                                    <th class="text-center">Read</th>
                                                    <th class="text-center">Write</th>
                                                    <th class="text-center">Create</th>
                                                    <th class="text-center">Delete</th>
                                                    <th class="text-center">Import</th>
                                                    <th class="text-center">Export</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Holidays</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Leaves</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Clients</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tasks</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chats</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Assets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Timing Sheets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                <!-- /Add Employee Modal -->
                
                <!-- Edit Employee Modal -->
                <div id="edit_employee" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Employee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" value="John" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" value="Doe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" value="johndoe@example.com" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" value="johndoe" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                                <input type="text" value="FT-0001" readonly class="form-control floating">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone </label>
                                                <input class="form-control" value="9876543210" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Company</label>
                                                <select class="select">
                                                    <option>Global Technologies</option>
                                                    <option>Delta Infotech</option>
                                                    <option selected>International Software Inc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Department <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Select Department</option>
                                                    <option>Web Development</option>
                                                    <option>IT Management</option>
                                                    <option>Marketing</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Designation <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Select Designation</option>
                                                    <option>Web Designer</option>
                                                    <option>Web Developer</option>
                                                    <option>Android Developer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive m-t-15">
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Module Permission</th>
                                                    <th class="text-center">Read</th>
                                                    <th class="text-center">Write</th>
                                                    <th class="text-center">Create</th>
                                                    <th class="text-center">Delete</th>
                                                    <th class="text-center">Import</th>
                                                    <th class="text-center">Export</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Holidays</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Leaves</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Clients</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tasks</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chats</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Assets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Timing Sheets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                <!-- /Edit Employee Modal -->
                
                <!-- Delete Employee Modal -->
                <div class="modal custom-modal fade" id="delete_employee" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Employee</h3>
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
                <!-- /Delete Employee Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection