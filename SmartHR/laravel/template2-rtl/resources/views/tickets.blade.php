<?php $page="tickets";?>
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
                                <h3>Tickets</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>New Tickets</h2>
                                        <h3 class="bl-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="newTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Solved Tickets</h2>
                                        <h3 class="org-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="solvedTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Open Tickets</h2>
                                        <h3 class="red-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="openTicketChart"></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card flex-fill tickets-card">
                                <div class="card-header">
                                    <div class="">
                                        <h2>Pending Tickets</h2>
                                        <h3 class="grn-text">112</h3>
                                    </div>
                                    <h6>+10%</h6>
                                </div>
                                <div class="" id="pendingTicketChart"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search ml-2"></i> Search </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_ticket"><i class="fas fa-plus"></i> Add Tickets</a>
                            </div>
                        </div> 
                    </div>
                    <!-- Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ticket Id</th>
                                            <th>Ticket Subject</th>
                                            <th>Assigned Staff</th>
                                            <th>Created Date</th>
                                            <th>Last Reply</th>
                                            <th>Priority</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="ticket-view">#TKT-0001</a></td>
                                            <td>Laptop Issue</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-xs" href="profile"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="#">John Smith</a>
                                                </h2>
                                            </td>
                                            <td>5 Jan 2019 07:21 AM</td>
                                            <td>5 Jan 2019 11.12 AM</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> New 
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_ticket"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_ticket"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="ticket-view">#TKT-0001</a></td>
                                            <td>Internet Issue</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a class="avatar avatar-xs" href="profile"><img alt="" src="assets/img/profiles/avatar-08.jpg"></a>
                                                    <a href="#">Catherine Manseau</a>
                                                </h2>
                                            </td>
                                            <td>5 Jan 2019 07:21 AM</td>
                                            <td>5 Jan 2019 11.12 AM</td>
                                            <td>
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-info"></i> Reopened 
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_ticket"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_ticket"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Ticket Modal -->
                <div id="add_ticket" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Subject</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Id</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Assign Staff</label>
                                                <select class="select">
                                                    <option>-</option>
                                                    <option>Mike Litorus</option>
                                                    <option>John Smith</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>-</option>
                                                    <option>Delta Infotech</option>
                                                    <option>International Software Inc</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>CC</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Assign</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Assignee</label>
                                                <div class="project-members">
                                                    <a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-02.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Followers</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Followers</label>
                                                <div class="project-members">
                                                    <a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                                    </a>
                                                    <a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                                    </a>
                                                    <a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                                    </a>
                                                    <a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-11.jpg" alt="">
                                                    </a>
                                                    <span class="all-team">+2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Files</label>
                                                <input class="form-control" type="file">
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
                <!-- /Add Ticket Modal -->
                
                <!-- Edit Ticket Modal -->
                <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Subject</label>
                                                <input class="form-control" type="text" value="Laptop Issue">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Id</label>
                                                <input class="form-control" type="text" readonly value="TKT-0001">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Assign Staff</label>
                                                <select class="select">
                                                    <option>-</option>
                                                    <option selected>Mike Litorus</option>
                                                    <option>John Smith</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>-</option>
                                                    <option >Delta Infotech</option>
                                                    <option selected>International Software Inc</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <select class="select">
                                                    <option>High</option>
                                                    <option selected>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>CC</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Assign</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Assignee</label>
                                                <div class="project-members">
                                                    <a title="John Smith" data-placement="top" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-02.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Followers</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ticket Followers</label>
                                                <div class="project-members">
                                                    <a title="Richard Miles" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                                    </a>
                                                    <a title="John Smith" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                                    </a>
                                                    <a title="Mike Litorus" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                                    </a>
                                                    <a title="Wilmer Deluna" data-toggle="tooltip" href="#" class="avatar">
                                                        <img src="assets/img/profiles/avatar-11.jpg" alt="">
                                                    </a>
                                                    <span class="all-team">+2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Files</label>
                                                <input class="form-control" type="file">
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
                <!-- /Edit Ticket Modal -->
                
                <!-- Delete Ticket Modal -->
                <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Ticket</h3>
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
                <!-- /Delete Ticket Modal -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection