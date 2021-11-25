<?php $page="shift-list";?>
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
                                <h3>Shift List</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shift List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        
                        <div class="col-sm-6 col-md-2"> 
                            <div class="form-group form-focus select-focus">
                                <select class="select floating"> 
                                    <option>All Department</option>
                                    <option value="1">Finance</option>
                                    <option value="2">Finance and Management</option>
                                    <option value="3">Hr & Finance</option>
                                    <option value="4">ITech</option>
                                </select>
                                <label class="focus-label">Department</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">  
                            <div class="form-group form-focus focused">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-add-emp w-100" data-toggle="modal" data-target="#add_schedule"> Assign Shifts</a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a href="#" class="btn btn-success btn-add-emp w-100" data-toggle="modal" data-target="#add_shift">Add Shifts</a>
                        </div> 
                    </div>
                    <!-- Search Filter -->
                    
                    <!-- Content Starts -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Shift Name</th>
                                            <th>Min Start Time</th>
                                            <th>Start Time</th>
                                            <th>Max Start Time</th>
                                            <th>Min End Time</th>
                                            <th>End Time</th>
                                            <th>Max End Time</th>
                                            <th>Break Time</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-right no-sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10'o clock Shift</td>
                                            <td>09:00:00 am</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>30 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>10:30 shift</td>
                                            <td>10:00:00 am</td>
                                            <td>10:30:00 am </td>
                                            <td>11:00:00 am</td>
                                            <td>06:30:00 pm</td>
                                            <td>07:00:00 pm</td>
                                            <td>07:30:00 pm </td>
                                            <td>45 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daily Rout</td>
                                            <td>06:00:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>07:00:00 am</td>
                                            <td>03:00:00 pm</td>
                                            <td>03:30:00 pm</td>
                                            <td>04:00:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Shift</td>
                                            <td>06:11:00 am</td>
                                            <td>06:30:00 am</td>
                                            <td>08:12:00 am</td>
                                            <td>09:12:00 pm </td>
                                            <td>09:30:00 pm</td>
                                            <td>09:45:00 pm</td>
                                            <td>45 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-two">
                                                        <i class="far fa-dot-circle"></i> Active
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Recurring Shift</td>
                                            <td>08:30:00 am</td>
                                            <td>09:00:00 am</td>
                                            <td>09:30:00 am</td>
                                            <td>05:30:00 pm</td>
                                            <td>06:00:00 pm</td>
                                            <td>06:30:00 pm</td>
                                            <td>60 mins</td>
                                            <td class="text-center">
                                                <div class="action-label">
                                                    <span class="role-info role-bg-one">
                                                        <i class="far fa-dot-circle"></i> Inactive
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec d-flex justify-content-end">
                                                <a href="#" data-toggle="modal" data-target="#edit_shift"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_employee"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Content End -->
                    
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->


@endsection