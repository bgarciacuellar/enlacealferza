<?php $page="policies";?>
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
                                <h3>Policies</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Policies</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Add Button -->
                    <div class="row filter-row mt-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_policy"><i class="fas fa-plus"></i> Add Policy</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Button -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">#</th>
                                            <th>Policy Name </th>
                                            <th>Department </th>
                                            <th>Description </th>
                                            <th>Created </th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Leave Policy</td>
                                            <td>All Departments</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>19 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-download"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_policy"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_policy"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Permission Policy</td>
                                            <td>Marketing</td>
                                            <td>Lorem ipsum dollar</td>
                                            <td>20 Feb 2019</td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-download"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_policy"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_policy"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->

                <!-- Add Policy Modal -->
                <div id="add_policy" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Policy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Policy Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Department</label>
                                        <select class="select">
                                            <option>All Departments</option>
                                            <option>Web Development</option>
                                            <option>Marketing</option>
                                            <option>IT Management</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Policy <span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="policy_upload">
                                            <label class="custom-file-label" for="policy_upload">Choose file</label>
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
                <!-- /Add Policy Modal -->
                
                <!-- Edit Policy Modal -->
                <div id="edit_policy" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Policy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Policy Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="Leave Policy">
                                    </div>
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Department</label>
                                        <select class="select">
                                            <option>All Departments</option>
                                            <option>Web Development</option>
                                            <option>Marketing</option>
                                            <option>IT Management</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Policy <span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="edit_policy_upload">
                                            <label class="custom-file-label" for="edit_policy_upload">Choose file</label>
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
                <!-- /Edit Policy Modal -->
                
                <!-- Delete Policy Modal -->
                <div class="modal custom-modal fade" id="delete_policy" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Policy</h3>
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
                <!-- /Delete Policy Modal -->
            
            </div>
            <!-- /Page Wrapper -->


@endsection