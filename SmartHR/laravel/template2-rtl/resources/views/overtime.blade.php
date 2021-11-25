<?php $page="overtime";?>
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
                                <h3>Overtime</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Overtime</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Overtime Statistics -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>12</h4>
                                <h6>Overtime Employee</h6>
                                <span>this month</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>118</h4>
                                <h6>Overtime Hours</h6>
                                <span>this month</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>23</h4>
                                <h6>Pending Request</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 d-flex">
                            <div class="stats-info ot-div flex-fill">
                                <h4>5</h4>
                                <h6>Rejected</h6>
                            </div>
                        </div>
                    </div>
                    <!-- /Overtime Statistics -->

                    <!-- Search Filter -->
                    <div class="row filter-row mt-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_overtime" style="width: auto;"><i class="fas fa-plus"></i> Add Overtime</a>
                            </div>
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
                                            <th>OT Date</th>
                                            <th class="text-center">OT Hours</th>
                                            <th>OT Type</th>
                                            <th>Description</th>
                                            <th class="text-center">Status</th>
                                            <th>Approved by</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar blue-link">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe</a>
                                                </h2>
                                            </td>
                                            <td>8 Mar 2019</td>
                                            <td class="text-center">2</td>
                                            <td>Normal day OT 1.5x</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> New
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar avatar-xs"><img src="assets/img/profiles/avatar-09.jpg" alt=""></a>
                                                    <a href="#">Richard Miles</a>
                                                </h2>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_overtime"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_overtime"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Overtime Modal -->
                <div id="add_overtime" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Overtime</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Select Employee <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>-</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                            <option>John Smith</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Overtime Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Overtime Hours <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea rows="4" class="form-control"></textarea>
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
                <!-- /Add Overtime Modal -->
                
                <!-- Edit Overtime Modal -->
                <div id="edit_overtime" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Overtime</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Select Employee <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>-</option>
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                            <option>John Smith</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Overtime Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Overtime Hours <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea rows="4" class="form-control"></textarea>
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
                <!-- /Edit Overtime Modal -->
                
                <!-- Delete Overtime Modal -->
                <div class="modal custom-modal fade" id="delete_overtime" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Overtime</h3>
                                    <p>Are you sure want to Cancel this?</p>
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
                <!-- /Delete Overtime Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection