<?php $page="estimates";?>
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
                                <h3>Estimates</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Estimates</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

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
                                <a href="add-estimate" class="btn btn-success btn-add-emp"><i class="fas fa-plus"></i> Add Estimate</a>
                            </div>
                        </div> 
                    </div>
                    <!-- Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Estimate Number</th>
                                            <th>Client</th>
                                            <th>Estimate Date</th>
                                            <th>Expiry Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="estimate-view">EST-0001</a></td>
                                            <td>Global Technologies</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-one">Accepted</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-estimate"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="estimate-view">EST-0002</a></td>
                                            <td>Delta Infotech</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Declined</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-estimate"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="estimate-view">EST-0003</a></td>
                                            <td>Cream Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-three">Sent</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-estimate"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="estimate-view">EST-0004</a></td>
                                            <td>International Software Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Expired</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-estimate"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_estimate"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
                <!-- Delete Estimate Modal -->
                <div class="modal custom-modal fade" id="delete_estimate" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Estimate</h3>
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
                <!-- /Delete Estimate Modal -->
            
            </div>
            <!-- /Page Wrapper -->



@endsection