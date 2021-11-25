<?php $page="clients";?>
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
                                <h3>Clients</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
                                        <label class="focus-label">Client ID</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">  
                                    <div class="form-group form-focus mb-0">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Client Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3"> 
                                    <div class="form-group form-focus select-focus mb-0">
                                        <select class="select floating"> 
                                            <option>Select Company</option>
                                            <option>Global Technologies</option>
                                            <option>Delta Infotech</option>
                                        </select>
                                        <label class="focus-label">Company</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">  
                                    <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="clients" class="grid-icon active"><i class="fas fa-th"></i></a>
                                <a href="clients-list" class="list-icon"><i class="fas fa-bars"></i></a>
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_client"><i class="fas fa-plus"></i> Add Client</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row staff-grid-row">

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Global Technologies</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Delta Infotech</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Cream Inc</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Wellware Company</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Mustang Technologi...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>International Software...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Mercury Software Inc...</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="card user-card emp-card clnt-card">
                                <div class="user-img-sec">
                                    <img src="assets/img/client-img.png" alt="User Image">
                                    <h4>Carlson Tech</h4>
                                    <h5>Barry Cuda</h5>
                                    <h6 class="bg-1">CEO</h6>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client">Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client">Delete</a>
                                        </div>
                                    </div>

                                    <div class="comment-sec">
                                        <i class="fas fa-comment-dots"></i>
                                    </div>
                                </div>
                                <ul class="client-img-li">
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <img src="assets/img/client-small.png" alt="..." />
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/client-small.png" alt="..." />
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-footer">
                                    <a href="client-profile">View Profile</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /Page Content -->
            
                <!-- Add Client Modal -->
                <div id="add_client" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Client</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control floating" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                                <input class="form-control floating" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone </label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Company Name</label>
                                                <input class="form-control" type="text">
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
                                                    <td>Projects</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Estimates</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Invoices</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
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
                <!-- /Add Client Modal -->
                
                <!-- Edit Client Modal -->
                <div id="edit_client" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Client</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input class="form-control" value="Barry" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input class="form-control" value="Cuda" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                                <input class="form-control" value="barrycuda" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input class="form-control floating" value="barrycuda@example.com" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input class="form-control" value="barrycuda" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input class="form-control" value="barrycuda" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-4">  
                                            <div class="form-group">
                                                <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                                <input class="form-control floating" value="CLT-0001" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone </label>
                                                <input class="form-control" value="9876543210" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Company Name</label>
                                                <input class="form-control" type="text" value="Global Technologies">
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
                                                    <td>Projects</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chat</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Estimates</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Invoices</td>
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
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
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                <!-- /Edit Client Modal -->
                
                <!-- Delete Client Modal -->
                <div class="modal custom-modal fade" id="delete_client" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Client</h3>
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
                <!-- /Delete Client Modal -->
                
            </div>
            <!-- /Page Wrapper -->



@endsection