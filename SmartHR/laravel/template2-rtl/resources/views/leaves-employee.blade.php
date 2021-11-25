<?php $page="leaves-employee";?>
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
                                <h3>Leaves</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Leaves</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- Leave Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>12</h4>
                                <h6>Annual Leave</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>3</h4>
                                <h6>Medical Leave</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>4</h4>
                                <h6>Other Leave</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="stats-info">
                                <h4>5</h4>
                                <h6>Remaining Leave</h6>
                            </div>
                        </div>
                    </div>
                    <!-- /Leave Statistics -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_leave"><i class="fas fa-plus"></i> Add Leave</a>
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
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No of Days</th>
                                            <th>Reason</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="#">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>8 Mar 2019</td>
                                            <td>9 Mar 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a> John Doe  <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>Medical Leave</td>
                                            <td>27 Feb 2019</td>
                                            <td>27 Feb 2019</td>
                                            <td>1 day</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a>John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>LOP</td>
                                            <td>24 Feb 2019</td>
                                            <td>25 Feb 2019</td>
                                            <td>2 days</td>
                                            <td>Personnal</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
                                                    <a>Mike Litorus  <span>IOS Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Paternity Leave</td>
                                            <td>13 Feb 2019</td>
                                            <td>17 Feb 2019</td>
                                            <td>5 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-24.jpg"></a>
                                                    <a>Richard Parker <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>30 Jan 2019</td>
                                            <td>31 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
                                                    <a>Catherine Manseau <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Maternity Leave</td>
                                            <td>5 Jan 2019</td>
                                            <td>15 Jan 2019</td>
                                            <td>10 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-15.jpg"></a>
                                                    <a>Buster Wigton <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Hospitalisation</td>
                                            <td>15 Jan 2019</td>
                                            <td>25 Jan 2019</td>
                                            <td>10 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
                                                    <a>Melita Faucher <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>13 Jan 2019</td>
                                            <td>14 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-03.jpg"></a>
                                                    <a>Tarah Shropshire <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>10 Jan 2019</td>
                                            <td>10 Jan 2019</td>
                                            <td>1 day</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-three">New</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-20.jpg"></a>
                                                    <a>Domenic Houston <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>10 Jan 2019</td>
                                            <td>11 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a>John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>9 Jan 2019</td>
                                            <td>10 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-two">Approved</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a>
                                                    <a>Rolland Webber <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>7 Jan 2019</td>
                                            <td>8 Jan 2019</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <span class="role-info role-bg-one">Declined</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_leave"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_approve"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Leave Modal -->
                <div id="add_leave" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Leave</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="row">
                                    <div class="form-group col-md-12">
                                        <label>Leave Type <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select Leave Type</option>
                                            <option>Casual Leave 12 Days</option>
                                            <option>Medical Leave</option>
                                            <option>Loss of Pay</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>From <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>To <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Number of days <span class="text-danger">*</span></label>
                                        <input class="form-control" readonly type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Remaining Leaves <span class="text-danger">*</span></label>
                                        <input class="form-control" readonly value="12" type="text">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Leave Reason <span class="text-danger">*</span></label>
                                        <textarea rows="4" class="form-control"></textarea>
                                    </div>
                                    <div class="submit-section col-md-12">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Leave Modal -->
                
                <!-- Edit Leave Modal -->
                <div id="edit_leave" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Leave</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="row">
                                    <div class="form-group col-md-12">
                                        <label>Leave Type <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select Leave Type</option>
                                            <option>Casual Leave 12 Days</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>From <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" value="01-01-2019" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>To <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" value="01-01-2019" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Number of days <span class="text-danger">*</span></label>
                                        <input class="form-control" readonly type="text" value="2">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Remaining Leaves <span class="text-danger">*</span></label>
                                        <input class="form-control" readonly value="12" type="text">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Leave Reason <span class="text-danger">*</span></label>
                                        <textarea rows="4" class="form-control">Going to hospital</textarea>
                                    </div>
                                    <div class="submit-section col-md-12">
                                        <button class="btn btn-primary cancel-btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Leave Modal -->
                
                <!-- Delete Leave Modal -->
                <div class="modal custom-modal fade" id="delete_approve" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Leave</h3>
                                    <p>Are you sure want to Cancel this leave?</p>
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
                <!-- /Delete Leave Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection