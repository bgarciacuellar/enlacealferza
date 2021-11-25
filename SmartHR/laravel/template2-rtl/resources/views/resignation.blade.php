<?php $page="resignation";?>
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
                                <h3>Resignation</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Resignation</li>
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
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_resignation"><i class="fas fa-plus"></i> Add Resignation</a>
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
                                            <th>Resigning Employee </th>
                                            <th>Department </th>
                                            <th>Reason </th>
                                            <th>Notice Date </th>
                                            <th>Resignation Date </th>
                                            <th class="text-left">Action</th>
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
                                            <td>Web Development</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>28 Feb 2019</td>
                                            <td>28 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_resignation"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_resignation"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->

                <!-- Add Resignation Modal -->
                <div id="add_resignation" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Resignation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Resigning Employee <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Notice Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Resignation Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Reason <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4"></textarea>
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
                <!-- /Add Resignation Modal -->
                
                <!-- Edit Resignation Modal -->
                <div id="edit_resignation" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Resignation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Resigning Employee <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <label>Notice Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" value="28/02/2019">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Resignation Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" value="28/02/2019">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Reason <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4"></textarea>
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
                <!-- /Edit Resignation Modal -->
                
                <!-- Delete Resignation Modal -->
                <div class="modal custom-modal fade" id="delete_resignation" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Resignation</h3>
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
                <!-- /Delete Resignation Modal -->
            
            </div>
            <!-- /Page Wrapper -->


@endsection