<?php $page="expense-reports";?>
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
                                <h3>Expense Report</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Expense Report</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <!-- Search Filter -->
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3"> 
                            <div class="form-group form-focus select-focus mb-0">
                                <select class="select floating"> 
                                    <option>Select buyer</option>
                                    <option>Loren Gatlin</option>
                                    <option>Tarah Shropshire</option>
                                </select>
                                <label class="focus-label">Purchased By</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">  
                            <div class="form-group form-focus focused mb-0">
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="btn btn-success btn-search"><i class="fas fa-search mr-2"></i> Search </a>
                        </div>
                    </div>
                    <!-- Search Filter -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Purchase From</th>
                                            <th>Purchase Date</th>
                                            <th>Purchased By</th>
                                            <th>Amount</th>
                                            <th>Paid By</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Dell Laptop</strong>
                                            </td>
                                            <td>Amazon</td>
                                            <td>5 Jan 2019</td>
                                            <td>
                                                <a href="profile" class="avatar avatar-xs">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="">
                                                </a>
                                                <h2><a href="profile">Loren Gatlin</a></h2>
                                            </td>
                                            <td>$ 1215</td>
                                            <td>Cash</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-one dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Mac System</strong>
                                            </td>
                                            <td>Amazon</td>
                                            <td>5 Jan 2019</td>
                                            <td>
                                                <a href="profile" class="avatar avatar-xs">
                                                    <img src="assets/img/profiles/avatar-03.jpg" alt="">
                                                </a>
                                                <h2><a href="profile">Tarah Shropshire</a></h2>
                                            </td>
                                            <td>$ 1215</td>
                                            <td>Cheque</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="role-info role-bg-two dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ico-sec">
                                                <a class="dropdown-item" href="#"><i class="fas fa-pen"></i></a>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Content -->
                
            </div>
            <!-- /Page Wrapper -->



@endsection