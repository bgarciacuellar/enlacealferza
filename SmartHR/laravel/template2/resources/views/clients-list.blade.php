<?php $page="clients-list";?>
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
                                <a href="clients" class="grid-icon"><i class="fas fa-th"></i></a>
                                <a href="clients-list" class="list-icon active"><i class="fas fa-bars"></i></a>
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_client"><i class="fas fa-plus"></i> Add Client</a>
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
                                            <th>Name</th>
                                            <th>Client ID</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">Global Technologies</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0001</td>
                                            <td>Barry Cuda</td>
                                            <td>barrycuda@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">Delta Infotech</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0002</td>
                                            <td>Tressa Wexler</td>
                                            <td>tressawexler@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img alt="" src="assets/img/client-img.png"></a>
                                                    <a href="client-profile">Cream Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0003</td>
                                            <td>Ruby Bartlett</td>
                                            <td>rubybartlett@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img alt="" src="assets/img/client-img.png"></a>
                                                    <a href="client-profile">Wellware Company</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0004</td>
                                            <td>Misty Tison</td>
                                            <td>mistytison@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">Mustang Technologies</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0005</td>
                                            <td>Daniel Deacon</td>
                                            <td>danieldeacon@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">International Software Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0006</td>
                                            <td>Walter Weaver</td>
                                            <td>walterweaver@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">Mercury Software Inc</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0007</td>
                                            <td>Amanda Warren</td>
                                            <td>amandawarren@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="client-profile" class="avatar"><img src="assets/img/client-img.png" alt=""></a>
                                                    <a href="client-profile">Carlson Tech</a>
                                                </h2>
                                            </td>
                                            <td>CLT-0008</td>
                                            <td>Betty Carlson</td>
                                            <td>bettycarlson@example.com</td>
                                            <td>9876543210</td>
                                            <td>
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_client"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_client"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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