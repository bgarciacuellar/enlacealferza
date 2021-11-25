<?php $page="goal-tracking";?>
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
                                <h3>Goal Tracking</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Goal Tracking</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_goal"><i class="fas fa-plus"></i> Add New</a>
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
                                            <th style="width: 30px;">#</th>
                                            <th>Goal Type</th>
                                            <th>Subject</th>
                                            <th>Target Achievement</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Description </th>
                                            <th>Status </th>
                                            <th>Progress </th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Event Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Invoice Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Employee Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Invoice Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress org"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Project Goal</td>
                                            <td>Test Goal</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                7 May 2019
                                            </td>
                                            <td>10 May 2019</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="job-app">
                                                <div class="prog-div">
                                                    <div class="progress"> <span class="progress-left"> <span class="progress-bar"></span> </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                                                        <div class="progress-value">73%</div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_goal"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_goal"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->

                <!-- Add Goal Modal -->
                <div id="add_goal" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Goal Tracking</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Goal Type</label>
                                                <select class="select">
                                                    <option>Invoice Goal</option>
                                                    <option>Event Goal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Subject</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Target Achievement</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Start Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Status</label>
                                                <select class="select">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
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
                <!-- /Add Goal Modal -->
                
                <!-- Edit Goal Modal -->
                <div id="edit_goal" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Goal Tracking</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Goal Type</label>
                                                <select class="select">
                                                    <option selected>Invoice Goal</option>
                                                    <option>Event Goal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Subject</label>
                                                <input class="form-control" type="text" value="Test Goal">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Target Achievement</label>
                                                <input class="form-control" type="text" value="Lorem ipsum dollar">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Start Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group">
                                                <label for="customRange">Progress</label>
                                                <input type="range" class="form-control-range custom-range" id="customRange">
                                                <div class="mt-2" id="result">Progress Value: <b></b></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="4">Lorem ipsum dollar</textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Status</label>
                                                <select class="select">
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
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
                <!-- /Edit Goal Modal -->
                
                <!-- Delete Goal Modal -->
                <div class="modal custom-modal fade" id="delete_goal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Goal Tracking List</h3>
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
                <!-- /Delete Goal Modal -->
            
            </div>
            <!-- /Page Wrapper -->



@endsection