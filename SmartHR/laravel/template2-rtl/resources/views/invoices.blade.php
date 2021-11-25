<?php $page="invoices";?>
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
                                <h3>Invoices</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoices</li>
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
                                <a href="create-invoice" class="btn btn-success btn-add-emp"><i class="fas fa-plus"></i> Add Invoice</a>
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
                                            <th>#</th>
                                            <th>Invoice Number</th>
                                            <th>Client</th>
                                            <th>Created Date</th>
                                            <th>Due Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th class="text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="invoice-view">#INV-0001</a></td>
                                            <td>Global Technologies</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-one">Paid</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-invoice"><i class="fas fa-pen"></i></a>
                                                <a href="edit-invoice"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="invoice-view">#INV-0002</a></td>
                                            <td>Delta Infotech</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-two">Sent</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-invoice"><i class="fas fa-pen"></i></a>
                                                <a href="edit-invoice"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="invoice-view">#INV-0003</a></td>
                                            <td>Cream Inc</td>
                                            <td>11 Mar 2019</td>
                                            <td>17 Mar 2019</td>
                                            <td>$2099</td>
                                            <td><span class="role-info role-bg-three">Partially Paid</span></td>
                                            <td class="text-right ico-sec">
                                                <a href="edit-invoice"><i class="fas fa-pen"></i></a>
                                                <a href="edit-invoice"><i class="fas fa-eye"></i></a>
                                                <a href="#"><i class="fas fa-download"></i></a>
                                                <a href="#"><i class="far fa-trash-alt"></i></a>
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