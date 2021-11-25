<?php $page="leave-type";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Page Content -->
                <div class="content container-fluid pb-0">

                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- Page Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-head-box">
                                        <h3>Leave Type</h3>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Leave Type</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="card settings-menu">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li class="menu-title">Settings</li>
                                        <li> 
                                            <a href="settings"><i class="la la-building"></i> <span>Company Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="localization"><i class="la la-clock-o"></i> <span>Localization</span></a>
                                        </li>
                                        <li> 
                                            <a href="theme-settings"><i class="la la-photo"></i> <span>Theme Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="roles-permissions"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
                                        </li>
                                        <li> 
                                            <a href="email-settings"><i class="la la-at"></i> <span>Email Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="performance-setting"><i class="la la-chart-bar"></i> <span>Performance Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="approval-setting"><i class="la la-thumbs-up"></i> <span>Approval Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="invoice-settings"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="salary-settings"><i class="la la-money"></i> <span>Salary Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="notifications-settings"><i class="la la-globe"></i> <span>Notifications</span></a>
                                        </li>
                                        <li> 
                                            <a href="change-password"><i class="la la-lock"></i> <span>Change Password</span></a>
                                        </li>
                                        <li class="active"> 
                                            <a href="leave-type"><i class="la la-cogs"></i> <span>Leave Type</span></a>
                                        </li>
                                        <li> 
                                            <a href="toxbox-setting"><i class="la la-comment"></i> <span>ToxBox Settings</span></a>
                                        </li>
                                        <li> 
                                            <a href="cron-setting"><i class="la la-rocket"></i> <span>Cron Settings</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-lg-9 settings-cont">
                            <div class="card p-4">
                                <div class="add-emp-section">
                                    <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_leavetype"><i class="fas fa-plus"></i> Add Leave Type</a>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped custom-table datatable mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Leave Type</th>
                                                        <th>Leave Days</th>
                                                        <th>Status</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>Casual Leave</td>
                                                        <td>12 Days</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right ico-sec">
                                                            <a href="#" data-toggle="modal" data-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>Medical Leave</td>
                                                        <td>12 Days</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right ico-sec">
                                                            <a href="#" data-toggle="modal" data-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>Loss of Pay</td>
                                                        <td>-</td>
                                                        <td>
                                                            <div class="dropdown action-label">
                                                                <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right ico-sec">
                                                            <a href="#" data-toggle="modal" data-target="#edit_leavetype"><i class="fas fa-pen"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#delete_leavetype"><i class="far fa-trash-alt"></i></a>
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
                <!-- /Page Content -->
                
                <!-- Add Leavetype Modal -->
                <div id="add_leavetype" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Leave Type</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Leave Type <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Number of days <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
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
                <!-- /Add Leavetype Modal -->
                
                <!-- Edit Leavetype Modal -->
                <div id="edit_leavetype" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Leave Type</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Leave Type <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="Casual Leave">
                                    </div>
                                    <div class="form-group">
                                        <label>Number of days <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="12">
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
                <!-- /Edit Leavetype Modal -->
                
                <!-- Delete Leavetype Modal -->
                <div class="modal custom-modal fade" id="delete_leavetype" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Leave Type</h3>
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
                <!-- /Delete Leavetype Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection