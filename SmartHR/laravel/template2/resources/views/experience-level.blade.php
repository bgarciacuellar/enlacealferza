<?php $page="experience-level";?>
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
                                <h3>Experience Level</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Experience Level</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-md-8 col-lg-9"></div>
                        <div class="col-md-4 col-lg-3">
                            <div class="add-emp-section">
                                <a href="#" class="btn btn-success btn-add-emp w-100" data-toggle="modal" data-target="#add_employee"><i class="fas fa-plus"></i> Add Experience Level</a>
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
                                            <th>Experiance</th>
                                            <th>Status</th>                                 
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>                                      
                                            <td>1 - 2</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active                              </a>
                                                </div>  
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>                                      
                                            <td>1 - 3</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active                              </a>
                                                </div>  
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>                                      
                                            <td>4 - 7</td>
                                            <td>
                                                <div class="action-label">
                                                    <a class="role-info role-bg-one" href="javascript:void(0);">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active                              </a>
                                                </div>  
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a href="#" data-toggle="modal" data-target="#edit_job"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Add Employee Modal -->
                <div id="add_employee" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Experience Level</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Experience Level <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Status</label>
                                                <select class="select">
                                                    <option>Select</option>
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
                <!-- /Add Employee Modal -->

                <!-- Edit Job Modal -->
                <div id="edit_job" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Candidates</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Experience Level <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" value="1-3">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Status</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Active</option>
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
                <!-- /Edit Job Modal -->

                <!-- Delete Job Modal -->
                <div class="modal custom-modal fade" id="delete_job" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete</h3>
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
                <!-- /Delete Job Modal -->
                
            </div>
            <!-- /Page Wrapper -->



@endsection