<?php $page="offer-approvals";?>
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
                                <h3>Offer Approvals</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Offer Approvals</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Job Title</th>
                                            <th>Job Type</th>
                                            <th>Pay</th>
                                            <th>Annual IP</th>
                                            <th>Long Term IP</th>
                                            <th>Status</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                                    <a href="profile">John Doe <span>Web Designer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Web Developer</a></td>
                                            <td>Temporary</td>
                                            <td>$25000</td>
                                            <td>15%</td>
                                            <td>No</td>
                                            <td><label class="role-info role-bg-three" style="display: inline-block;min-width: 90px;">Requested</label></td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
                                                    <a href="profile">Richard Miles <span>Web Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Web Designer</a></td>
                                            <td>Contract</td>
                                            <td>$25000</td>
                                            <td>15%</td>
                                            <td>No</td>
                                            <td><label class="role-info role-bg-two" style="display: inline-block;min-width: 90px;">Rejected</label></td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#delete_job"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="profile">John Smith <span>Android Developer</span></a>
                                                </h2>
                                            </td>
                                            <td><a href="job-details">Android Developer</a></td>
                                            <td>Salary</td>
                                            <td>$25000</td>
                                            <td>15%</td>
                                            <td>No</td>
                                            <td><label class="role-info role-bg-one" style="display: inline-block;min-width: 90px;">Approved</label></td>
                                            <td class="text-right ico-sec">
                                                <a href="#"><i class="fas fa-pen"></i></a>
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