<?php $page="holidays";?>
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
                                <h3>Holidays</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Holidays</li>
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
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_holiday"><i class="fas fa-plus"></i> Add Holidays</a>
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
                                            <th>#</th>
                                            <th>Title </th>
                                            <th>Holiday Date</th>
                                            <th>Day</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="holiday-completed">
                                            <td>1</td>
                                            <td>New Year</td>
                                            <td>1 Jan 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Sunday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>2</td>
                                            <td>Good Friday</td>
                                            <td>14 Apr 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Friday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>3</td>
                                            <td>May Day</td>
                                            <td>1 May 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>4</td>
                                            <td>Memorial Day</td>
                                            <td>28 May 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-completed">
                                            <td>5</td>
                                            <td>Ramzon</td>
                                            <td>26 Jun 2019</td>
                                            <td><span class="role-info role-bg-two">Monday</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>6</td>
                                            <td>Bakrid</td>
                                            <td>2 Sep 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Saturday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>7</td>
                                            <td>Deepavali</td>
                                            <td>18 Oct 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Wednesday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="holiday-upcoming">
                                            <td>8</td>
                                            <td>Christmas</td>
                                            <td>25 Dec 2019</td>
                                            <td>
                                                <span class="role-info role-bg-two">Monday</span>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_holiday"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_holiday"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Holiday Modal -->
                <div class="modal custom-modal fade" id="add_holiday" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Holiday</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Holiday Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Holiday Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
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
                <!-- /Add Holiday Modal -->
                
                <!-- Edit Holiday Modal -->
                <div class="modal custom-modal fade" id="edit_holiday" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Holiday</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Holiday Name <span class="text-danger">*</span></label>
                                        <input class="form-control" value="New Year" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Holiday Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
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
                <!-- /Edit Holiday Modal -->

                <!-- Delete Holiday Modal -->
                <div class="modal custom-modal fade" id="delete_holiday" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Holiday</h3>
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
                <!-- /Delete Holiday Modal -->
                
            </div>
            <!-- /Page Wrapper -->



@endsection