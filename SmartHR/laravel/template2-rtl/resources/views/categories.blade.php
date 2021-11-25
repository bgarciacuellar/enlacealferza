<?php $page="categories";?>
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
                                <h3>Categories</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                <a href="#" class="btn btn-success btn-add-emp" data-toggle="modal" data-target="#add_categories"><i class="fas fa-plus"></i>  Add Categories</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name </th>
                                            <th>Sub-Category Name</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hardware</td>
                                            <td>Hardware Expenses</td>
                                            <td class="text-left ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="sub-category"><i class="fas fa-object-ungroup"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Material</td>
                                            <td>Material Expenses</td>
                                            <td class="text-left ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="sub-category"><i class="fas fa-object-ungroup"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Vehicle</td>
                                            <td>Company Vehicle Information</td>
                                            <td class="text-left ico-sec">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_categories"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="sub-category"><i class="fas fa-object-ungroup"></i></a>
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
                <div class="modal custom-modal fade" id="add_categories" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Categories</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Categories Name <span class="text-danger">*</span></label>
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
                <!-- /Add Holiday Modal -->
                
                <!-- Add Holiday Modal -->
                <div class="modal custom-modal fade" id="edit_categories" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Categories</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Categories Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="Hardware">
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
            </div>
            <!-- /Page Wrapper -->


@endsection